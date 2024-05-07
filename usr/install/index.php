<?php

session_start();#session
//error_reporting(0);#非致命错误不报错
define('ROOTS', dirname(__FILE__) . '/');#本目录
define('ROOT', dirname(ROOTS) . '../../');#根目录
date_default_timezone_set("PRC");#时区
$date = date('Y-m-d h:i:s', time());#时间
include_once("../tool/function.php");#引入相关文件
include_once("../tool/db.class.php");
@include_once("../../con.php");#config

if(file_exists("../../con.php")==true)
{
     alert('配置文件已经存在,退出安装','../../');
}
$do = isset($_GET['do']) ? $_GET['do'] : '0';

$db_host = $_GET['db_host'] ?? NULL;
$db_port = $_GET['db_port'] ?? NULL;
$db_user = $_GET['db_user'] ?? NULL;
$db_pwd = $_GET['db_pwd'] ?? NULL;
$db_name = $_GET['db_name'] ?? NULL;
















if ($do == "install") {

    if (in_array(NULL, [$db_host, $db_port, $db_user, $db_pwd, $db_name], FALSE)) {
        json(['code' => 100, 'msg' => '信息不全！']);
        return;
    }

    $config = "<?php
/*数据库配置*/
\$dbconfig=array(
    'host' => '{$db_host}', //数据库服务器
    'port' => {$db_port}, //数据库端口
    'user' => '{$db_user}', //数据库用户名
    'pwd' => '{$db_pwd}', //数据库密码
    'dbname' => '{$db_name}', //数据库名
);
?>";
    @$con = DB::connect($db_host, $db_user, $db_pwd, $db_name, $db_port);
    if (!$con) {
        $error_msg = '';
        switch (DB::connect_errno()) {
            case 2002:
                $error_msg = '链接失败，数据库地址错误！';
                break;
            case 1045:
                $error_msg = '链接失败，账号或密码错误！';
                break;
            case 1049:
                $error_msg = '链接失败，数据库名不存在！';
                break;
            default:
                $error_msg = '链接失败！';
                break;
        }
        json(['code' => 100, 'msg' => $error_msg]);
        return;
    }


    
           
           
   if (DB::query("select * from zyyo_data where 1") === FALSE) {
       $sql = file_get_contents(ROOTS . "install.sql");
$sql = explode(';', $sql);
DB::query("set sql_mode = ''");
DB::query("set names utf8mb4");
$t = 0;
$e = 0;
$error = '';
for ($i = 0; $i < count($sql); $i++) {
    $query = trim($sql[$i]);
    if (empty($query)) {
        continue;
    }
    if (DB::query($query)) {
        ++$t;
    } else {
        ++$e;
        $error .= DB::error() . '<br />';
    }
}

if ($e == 0) {
    if (!file_put_contents(ROOT . "con.php", $config)) {
        json(['code' => 100, 'msg' => '保存失败！']);
        return;
    } else {
        json(['code' => 200, 'msg' => '安装成功:成功' . $t . '失败' . $e]);
    }

} else {
    json(['code' => 100, 'msg' => '安装失败:成功' . $t . '失败' . $e . '错误' . $error]);
}

   }else{
       
            if (!file_put_contents(ROOT . "con.php", $config)) {
                json(['code' => 100, 'msg' => '保存失败！']);
                return;
            } else {
                json(['code' => 200, 'msg' => '跳过安装成功']);
            }

       
   }
        

   

}


if ($do == "test") {
    if (in_array(NULL, [$db_host, $db_port, $db_user, $db_pwd, $db_name], FALSE)) {
        json(['code' => 100, 'msg' => '信息不全！']);
        return;
    }
    @$con = DB::connect($db_host, $db_user, $db_pwd, $db_name, $db_port);
    if (!$con) {
        $error_msg = '';
        switch (DB::connect_errno()) {
            case 2002:
                $error_msg = '链接失败，数据库地址错误！';
                break;
            case 1045:
                $error_msg = '链接失败，账号或密码错误！';
                break;
            case 1049:
                $error_msg = '链接失败，数据库名不存在！';
                break;
            default:
                $error_msg = '链接失败！';
                break;
        }
        json(['code' => 100, 'msg' => $error_msg]);

    } else {
        json(['code' => 200, 'msg' => '测试链接成功']);
    }
}




if (file_exists(ROOT . "con.php")) {
    alert('你已经安装过了,请删除con.php', '');
}






?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ZYYO安装程序</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="message.min.css">
    <script src="message.min.js"></script>
    <style>
        body {
            height: 100vh;
            width: 100vw;
            background: #efefef;

        }

        button,
        input,
        input:focus,
        #selectOption {
            outline: none;
            border: none;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            overflow: hidden;
        }

        .main {
            width: 90%;
            max-width: 500px;
            padding: 20px 20px 40px 20px;
            background-color: #fff;
            margin: 60px auto;
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            box-shadow: 1px 1px 20px 1px #e9e9e9;
        }

        .logo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-image: url(https://q1.qlogo.cn/g?b=qq&nk=3509679579&s=5);
            background-size: cover;
            margin-bottom: 20px;

        }

        .password {
            width: 80%;
            height: 40px;
            padding-left: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            background: #f8f8f8;
        }

        .password:focus {
            border: 1px solid #000;
        }

        .password:hover {
            border: 1px solid #000;
        }

        .password:active {
            border: 1px solid #000;
        }
.container{
    display: flex;
    gap: 10px;
    margin-top: 20px;
}
        .button {
            
            width: 80px;
            height: 40px;
            border-radius: 5px;
            background: linear-gradient(20deg, #6928b0, #246ca6);
            color: #fff;

        }

        #container2 {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            display: none;
        }

        #container1 {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        #fitler {
            display: none;
            width: 100vw;
            position: fixed;
            height: 100vh;
            background: #2222224f;
        }
    </style>
</head>

<body>
    <div id="fitler"></div>
    <div class="main">
        <div class="logo"></div>

        <div id="container1">
            欢迎使用ZYYO主页2.0
 <div class="container">
            <button onclick="start()" class="button">开始安装</button>
</div>
        </div>

        <div id="container2">
            <input type="text" id="db_host" value="127.0.0.1" class="password" placeholder="数据库地址">
            <input type="text" id="db_port" value="3306" class="password" placeholder="数据库端口">
            <input type="text" id="db_name" class="password" placeholder="数据库名">
            <input type="text" id="db_user" class="password" placeholder="数据库用户名">
            <input type="text" id="db_pass" class="password" placeholder="数据库密码">
            <div class="container">
            <button onclick="testConnection()" class="button">测试连接</button>
            <button onclick="install()" class="button">执行安装</button></div>
        </div>



    </div>
    <script>







        function testConnection() {
            var db_host = document.getElementById('db_host').value;
            var db_port = document.getElementById('db_port').value;
            var db_name = document.getElementById('db_name').value;
            var db_user = document.getElementById('db_user').value;
            var db_pass = document.getElementById('db_pass').value;
            var fitler = document.getElementById('fitler');


            var loadingMsg = Qmsg.loading('加载中');
            fitler.style.display = "flex";
            const xhr = new XMLHttpRequest();
            xhr.open('GET', `?do=test&db_host=${db_host}&db_port=${db_port}&db_name=${db_name}&db_user=${db_user}&db_pwd=${db_pass}`);
            xhr.onload = function () {
                const response = JSON.parse(xhr.responseText);
                setTimeout(function () {
                    loadingMsg.close();
                    fitler.style.display = "none";
                    Qmsg.success(response.msg);

                }, 500);
            };
            xhr.send();
        }










        function install() {
            var db_host = document.getElementById('db_host').value;
            var db_port = document.getElementById('db_port').value;
            var db_name = document.getElementById('db_name').value;
            var db_user = document.getElementById('db_user').value;
            var db_pass = document.getElementById('db_pass').value;
            var fitler = document.getElementById('fitler');


            var loadingMsg = Qmsg.loading('加载中');
            fitler.style.display = "flex";
            const xhr = new XMLHttpRequest();
            xhr.open('GET', `?do=install&db_host=${db_host}&db_port=${db_port}&db_name=${db_name}&db_user=${db_user}&db_pwd=${db_pass}`);
            xhr.onload = function () {
                const response = JSON.parse(xhr.responseText);

                setTimeout(function () {
                    loadingMsg.close();
                    if (response.code == 200) {

                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                    }
                    fitler.style.display = "none";
                    Qmsg.success(response.msg);

                }, 500);
            };
            xhr.send();
        }








        function start() {
            var a = document.getElementById('container2');
            var b = document.getElementById('container1');
            b.style.display = "none";
            a.style.display = "flex";


        }
    </script>


</body>

</html>