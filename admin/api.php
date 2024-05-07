<?php
include_once '../usr/inc.php';
$do = isset($_GET['do']) ? $_GET['do'] : '0';
header('Content-Type: application/json');
if($adminlogin!=1){
json(['code' => 0, 'msg' => '未登录！']);
exit();
}
function escape_get_params() {
    foreach ($_GET as $key => $value) {
        $_GET[$key] = str_replace("'", "\\'", $value);
    }
}
escape_get_params();
if ($do == "base") {
	if (isset($_GET['user'])  && isset($_GET['pwd']) &&isset($_GET['sitename'])  && isset($_GET['keywords']) && isset($_GET['description'])&& isset($_GET['ico'])&& isset($_GET['logo']) && isset($_GET['beian']) && isset($_GET['tag']) && isset($_GET['time']) && isset($_GET['infor']) && isset($_GET['tcs'])&& isset($_GET['des']) && isset($_GET['title1']) && isset($_GET['title2'])&& isset($_GET['header'])&& isset($_GET['footer'])&& isset($_GET['indexlogo'])&& isset($_GET['leftzyyo'])&& isset($_GET['skill'])&& isset($_GET['maxwidth'])) {
		$sitename = $_GET['sitename'];
		$keywords = $_GET['keywords'];
			$user= $_GET['user'];
		$pwd = $_GET['pwd'];
			$infor = $_GET['infor'];
				$tcs = $_GET['tcs'];
		$description = $_GET['description'];
			$ico = $_GET['ico'];
		
				$logo= $_GET['logo'];
		$beian = $_GET['beian'];
		$tag = $_GET['tag'];
		$time = $_GET['time'];
		$des= $_GET['des'];
		$title1 = $_GET['title1'];
		$title2 = $_GET['title2'];
		$header = $_GET['header'];
		$footer = $_GET['footer'];
		$indexlogo = $_GET['indexlogo'];
		$skill = $_GET['skill'];
		$leftzyyo = $_GET['leftzyyo'];
			$maxwidth = $_GET['maxwidth'];
		$sql = "UPDATE zyyo_data SET user='$user', pwd='$pwd', sitename='{$sitename}',  keywords='$keywords', description='$description', ico='$ico', logo='$logo', beian='$beian', tag='$tag', time='$time',tcs='$tcs', des='$des',infor='$infor', title1='{$title1}', title2='$title2' ,header='$header',footer='$footer',indexlogo='$indexlogo',leftzyyo='$leftzyyo',skill='$skill',maxwidth='$maxwidth' WHERE id=1";
		if (DB::query($sql) == TRUE) {
			json(['code' => 1, 'msg' => '成功！']);
		} else {
			json(['code' => 0, 'msg' => '错误！'.DB::error()]);
		}
	} else {
		json(['code' => 0, 'msg' => '参数不足！']);
	}
} else if ($do == "newproject") {
	if (isset($_GET['name']) && isset($_GET['icon']) && isset($_GET['type'])) {
		$name = $_GET['name'];
		$icon = $_GET['icon'];
		$type = $_GET['type'];
		$sql = "INSERT INTO zyyo_project (name, icon, type) VALUES ('$name', '$icon', '$type')";

		if (@DB::query($sql) == TRUE) {
			json(['code' => 1, 'msg' => '成功！']);
		} else {
			json(['code' => 0, 'msg' => '错误！'.DB::error()]);
		}
	} else {
		json(['code' => 0, 'msg' => '参数不足！']);
	}
} else if ($do == "newitem") {
	if (isset($_GET['name']) && isset($_GET['icon']) && isset($_GET['des']) && isset($_GET['href']) && isset($_GET['project'])) {
		$name = $_GET['name'];
		$icon = $_GET['icon'];
		$des = $_GET['des'];
		$href = $_GET['href'];
		$project = $_GET['project'];
		$sql = "INSERT INTO zyyo_item (name, icon, des, href, project) VALUES ('$name', '$icon', '$des', '$href', '$project')";

		if (@DB::query($sql) == TRUE) {
			json(['code' => 1, 'msg' => '成功！']);
		} else {
			json(['code' => 0, 'msg' => '错误！'.DB::error()]);
		}
	} else {
		json(['code' => 0, 'msg' => '参数不足！']);
	}
} else if ($do == "newicon") {
	if (isset($_GET['name']) && isset($_GET['icon']) && isset($_GET['href']) && isset($_GET['onclick'])) {
		$name = $_GET['name'];
		$icon = $_GET['icon'];
		$href = $_GET['href'];
		$onclick = $_GET['onclick'];
		$sql = "INSERT INTO zyyo_icon (tip, icon,  href, onclick) VALUES ('$name', '$icon',  '$href', '$onclick')";

		if (@DB::query($sql) == TRUE) {
			json(['code' => 1, 'msg' => '成功！']);
		} else {
			json(['code' => 0, 'msg' => '错误！'.DB::error()]);
		}
	} else {
		json(['code' => 0, 'msg' => '参数不足！']);
	}
} else if ($do == "del") {
    if (isset($_GET['c']) && isset($_GET['id'])) {
        $class = $_GET['c'];
        $id = $_GET['id'];

      
        $sql = "DELETE FROM `$class` WHERE `id` = $id";
        if (@DB::query($sql) == TRUE) {
            
			if ($class === 'zyyo_project') {
			    
			    
            $sql1= "DELETE FROM `zyyo_item` WHERE `project` = $id";
            if (@DB::query($sql1) == FALSE) {
                json(['code' => 0, 'msg' => '删除zyyo_item表失败！'.DB::error()]);
            }else{
                json(['code' => 1, 'msg' => '成功！']);
            }
            
            
        }else{
                json(['code' => 1, 'msg' => '成功！']);
            }
        
		} else {
			json(['code' => 0, 'msg' => '错误！'.DB::error()]);
		}

        
        

        
    } else {
        json(['code' => 0, 'msg' => '参数不足！']);
    }
}
else if ($do == "edititem") {
    if (isset($_GET['id']) && isset($_GET['name']) && isset($_GET['icon']) && isset($_GET['des']) && isset($_GET['href']) && isset($_GET['project'])) {
        $id = $_GET['id'];
        $name = $_GET['name'];
        $icon = $_GET['icon'];
        $des = $_GET['des'];
        $href = $_GET['href'];
        $project = $_GET['project'];

        $sql = "UPDATE zyyo_item SET name='$name', icon='$icon', des='$des', href='$href', project='$project' WHERE id='$id'";

        if (@DB::query($sql) == TRUE) {
            json(['code' => 1, 'msg' => '成功！']);
        } else {
            json(['code' => 0, 'msg' => '错误！'.DB::error()]);
        }
    } else {
        json(['code' => 0, 'msg' => '参数不足！']);
    }
} else if ($do == "editproject") {
    if (isset($_GET['id']) && isset($_GET['name']) && isset($_GET['icon']) && isset($_GET['type'])) {
        $id = $_GET['id'];
        $name = $_GET['name'];
        $icon = $_GET['icon'];
        $type = $_GET['type'];

        $sql = "UPDATE zyyo_project SET name='$name', icon='$icon', type='$type' WHERE id='$id'";

        if (@DB::query($sql) == TRUE) {
            json(['code' => 1, 'msg' => '成功！']);
        } else {
            json(['code' => 0, 'msg' => '错误！'.DB::error()]);
        }
    } else {
        json(['code' => 0, 'msg' => '参数不足！']);
    }
} else if ($do == "editicon") {
    if (isset($_GET['id']) && isset($_GET['tip']) && isset($_GET['icon']) && isset($_GET['href']) && isset($_GET['onclick'])) {
        $id = $_GET['id'];
        $tip= $_GET['tip'];
        $icon = $_GET['icon'];
        $href = $_GET['href'];
        $onclick = $_GET['onclick'];

        $sql = "UPDATE zyyo_icon SET tip='$tip', icon='$icon', href='$href', onclick='$onclick' WHERE id='$id'";

        if (@DB::query($sql) == TRUE) {
            json(['code' => 1, 'msg' => '成功！']);
        } else {
            json(['code' => 0, 'msg' => '错误！'.DB::error()]);
        }
    } else {
        json(['code' => 0, 'msg' => '参数不足！']);
    }
}else if ($do == "edittheme") {
    if (isset($_GET['id']) && isset($_GET['name']) && isset($_GET['main_bg_color']) && isset($_GET['main_text_color']) && isset($_GET['gradient']) && isset($_GET['purple_text_color']) && isset($_GET['text_bg_color']) && isset($_GET['item_bg_color']) && isset($_GET['item_hover_color']) && isset($_GET['item_left_title_color']) && isset($_GET['item_left_text_color']) && isset($_GET['footer_text_color']) && isset($_GET['left_tag_item']) && isset($_GET['card_filter']) && isset($_GET['back_filter']) && isset($_GET['back_filter_color'])&& isset($_GET['fill'])) {
        $id = $_GET['id'];
        $name = $_GET['name'];
        $main_bg_color = $_GET['main_bg_color'];
        $main_text_color = $_GET['main_text_color'];
        $gradient = $_GET['gradient'];
        $purple_text_color = $_GET['purple_text_color'];
        $text_bg_color = $_GET['text_bg_color'];
        $item_bg_color = $_GET['item_bg_color'];
        $item_hover_color = $_GET['item_hover_color'];
        $item_left_title_color = $_GET['item_left_title_color'];
        $item_left_text_color = $_GET['item_left_text_color'];
        $footer_text_color = $_GET['footer_text_color'];
        $left_tag_item = $_GET['left_tag_item'];
        $card_filter = $_GET['card_filter'];
        $back_filter = $_GET['back_filter'];
        $back_filter_color = $_GET['back_filter_color'];
$fill = $_GET['fill'];
        $sql = "UPDATE zyyo_theme SET name='$name', main_bg_color='$main_bg_color', main_text_color='$main_text_color', gradient='$gradient', purple_text_color='$purple_text_color', text_bg_color='$text_bg_color', item_bg_color='$item_bg_color', item_hover_color='$item_hover_color', item_left_title_color='$item_left_title_color', item_left_text_color='$item_left_text_color', footer_text_color='$footer_text_color', left_tag_item='$left_tag_item', card_filter='$card_filter', back_filter='$back_filter', back_filter_color='$back_filter_color', fill='$fill' WHERE id='$id'";

        if (@DB::query($sql) == TRUE) {
            json(['code' => 1, 'msg' => '成功！']);
        } else {
            json(['code' => 0, 'msg' => '错误！'.DB::error()]);
        }
    } else {
        json(['code' => 0, 'msg' => '参数不足！']);
    }
}


?>