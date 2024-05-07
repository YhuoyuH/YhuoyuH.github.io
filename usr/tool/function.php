<?php

function alert($text,$href){
    $a="";
    if($href == ""){
        $a=".main button{display:none;}";
    }
    exit('<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport"content="width=device-width, initial-scale=1.0"><title>提示</title><style>*{margin:0;padding:0}html{user-select:none;width:100%;height:100%}body{display:flex;height:100%;width:100%;align-items:center;flex-direction:column;background: #f3f3f3;}.main{box-sizing:border-box;margin-top:200px;display:flex;align-items:center;flex-direction:column;padding:40px 50px;width:80%;max-width:350px;border-radius:25px;background-color:rgb(255,255,255);box-shadow:0 0 10px 5px rgba(191,216,255,0.1);animation:0.5s scale}.main p{margin-top:30px;font-size:20px;}.main button{width:100px;height:50px;margin-top:30px;border-radius:10px;border:none;outline:none;background-color:rgb(67,155,255);font-size:20px;color:rgb(248,248,248)}@keyframes scale{0%{transform:scale(0)}100%{transform:scale(1)}}'.$a.'</style></head><body><div class="main"><h1>官方提示</h1><p>'.$text.'</p><button onclick="javascript:jump()">确认</button></div><script>function jump(){window.location.href="'.$href.'"}</script></body></html>');
    
    
}







function get_curl($url, $post = 0, $referer = 0, $cookie = 0, $header = 0, $ua = 0, $nobaody = 0) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$httpheader[] = "Accept:application/json";
	$httpheader[] = "Accept-Encoding:gzip,deflate,sdch";
	$httpheader[] = "Accept-Language:zh-CN,zh;q=0.8";
	$httpheader[] = "Connection:close";
	curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
	if ($post) {
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	}
	if ($header) {
		curl_setopt($ch, CURLOPT_HEADER, true);
	}
	if ($cookie) {
		curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	}
	if ($referer) {
		if ($referer == 1) {
			curl_setopt($ch, CURLOPT_REFERER, 1);
		} else {
			curl_setopt($ch, CURLOPT_REFERER, $referer);
		}
	}
	if ($ua) {
		curl_setopt($ch, CURLOPT_USERAGENT, $ua);
	} else {
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; U; Android 4.0.4; es-mx; HTC_One_X Build/IMM76D) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0");
	}
	if ($nobaody) {
		curl_setopt($ch, CURLOPT_NOBODY, 1);
	}
	curl_setopt($ch, CURLOPT_ENCODING, "gzip");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$ret = curl_exec($ch);
	curl_close($ch);
	return $ret;
}







function diffBetweenTwoDays ($day1, $day2){
	if($day1 >= $day2){
		return 0;
	}else{
		$second1 = strtotime(explode(' ',$day1)[0]);
		$second2 = strtotime(explode(' ',$day2)[0]); 
		if ($second1 < $second2) {
			$tmp = $second2;
			$second2 = $second1;
			$second1 = $tmp;
		  }
		  return ($second1 - $second2) / 86400;
	}
}


function safe($string) {
   

    return addslashes($string);
}






function get_ip_city($ip)
{
	$url = 'http://ip.360.cn/IPShare/info';
	@$city = get_curl($url);
	$city = json_decode($city, true);
		$location = $city['location'];

	if ($location) {
		return $location;
	} else {
		return false;
	}
}




function real_ip() {
    $ip = $_SERVER['REMOTE_ADDR'];
    if (isset($_SERVER['HTTP_CLIENT_IP']) && preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR']) AND preg_match_all('#\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}#s', $_SERVER['HTTP_X_FORWARDED_FOR'], $matches)) {
        foreach ($matches[0] AS $xip) {
            if (!preg_match('#^(10|172\.16|192\.168)\.#', $xip)) {
                $ip = $xip;
                break;
            }
        }
    }
    return $ip;
}








function km($len = 12){
	$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	$strlen = strlen($str);
	$randstr = "";
	for ($i = 0; $i < $len; $i++) {
		$randstr .= $str[mt_rand(0, $strlen - 1)];
	}
	return $randstr;
}












# 生成json
function json(array $res)
{
	exit(json_encode($res, JSON_UNESCAPED_UNICODE));
}











?>