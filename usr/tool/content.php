<?php

function echoconfig()
{
     global $data;
    echo("<style>");
    
    
    
    if($data['indexlogo'] == 1){
        echo '
        .index-logo{
    display: none;
}
';
}
 if($data['leftzyyo'] == 1){
        echo '
        .zyyo-left{
    display: none;
}
.zyyo-right{
    width:100%;
}
';

}
if($data['skill'] == 1){
        echo '
        #skill{
    display: none;
}

';

}
if($data['tcs'] == 1){
        echo '
        .tanChiShe{
    display: none;
}

';

}
echo '
.zyyo-main{
    max-width:'.$data['maxwidth'].';
}
';
echo("</style>");
    
}









function echoTheme(){
 global $data;
 $id =  $data['theme'] ;
$sql = "SELECT * FROM zyyo_theme WHERE id = $id";
$result = DB::query($sql);

if ($result->num_rows > 0) {

    echo "<style>html{";
    while ($row = $result->fetch_assoc()) {
        foreach ($row as $key => $value) {
            echo "--$key: $value;\n";
        }
    }
    echo "}</style>";
} else {
    echo "样式丢失";
    
}

}
function echoIcon(){
 global $data;
 
$sql = "SELECT * FROM zyyo_icon ORDER BY id";
$result = DB::query($sql);

if ($result->num_rows > 0) {

  
    while ($row = $result->fetch_assoc()) {
        echo '<a class="iconItem" onclick="'.$row['onclick'].'" href="'.$row['href'].'">
                       '.$row['icon'].' 
                        <div class="iconTip">'.$row['tip'].'</div>
                    </a>';
    }
   
} 

}


             
function echoTag(){
 global $data;

$tag = explode("\n",$data['tag']);


  echo ' <div class="left-div left-tag">';
   

foreach ($tag as $value) {
  echo '<div class="left-tag-item">'.$value.'</div>';
}



       
   
   echo '</div>';


}



function echoInfor(){
 global $data;
$infor = explode("\n", $data['infor']);

  echo '<div class="left-div left-des">';
foreach ($infor  as $line) {
    
    $parts = explode("|", $line);
    $icon = $parts[0];
    $name = $parts[1];

    echo '<div class="left-des-item">'.$icon.$name.'</div>';
 
}
  echo '</div>';
}

function echoTime(){
 global $data;
$time = explode("\n", $data['time']);

  echo '<div class="left-div left-time">
                <ul id="line">';
foreach ($time  as $line) {
    
    $parts = explode("|", $line);
    $content = $parts[0];
    $time = $parts[1];

    echo '<li><div class="focus"></div><div>'.$time.'</div><div>'.$content.'</div></li>';
 
}
  echo '  </ul>
            </div>';
}

function echoDes(){
     global $data;
     $text =$data['des'];
     $text = explode("\n", $text);
   
     foreach ($text  as $text) {
      echo '<div class="description">';
$text = str_replace('{', '<span class="purpleText">', $text);
$text = str_replace('}', '</span>', $text);
$text = str_replace('[', '<span class="purpleText textBackground">', $text);
$text = str_replace(']', '</span>', $text);
    echo $text;
 echo '</div>';
}


}

function echoList(){
    global $data;
$sql = "SELECT * FROM zyyo_project ORDER BY id";
$result = DB::query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="title">'.$row["icon"]. $row["name"] . " </div>";
        $type = $row["type"];
        $type = ($type == 0)? "a" :"b";
        $sql_items = "SELECT * FROM zyyo_item WHERE project = " . $row["id"];
        $result_items = DB::query($sql_items);

        if ($result_items->num_rows > 0) {
            echo '<div class="projectList">';
            while ($row_item = $result_items->fetch_assoc()) {
                echo '<a class="projectItem '.$type.'" target="_blank" href="'.$row_item["href"].'">
                        <div class="projectItemLeft">
                            <h1>' . $row_item["name"] . '</h1><p>'. $row_item["des"].'</p>
                        </div>
                        <div class="projectItemRight">
                            <img src="'.$row_item["icon"].'" alt="">
                        </div>
                        
                    </a>';
            }
            echo "</div>";
        } else {
            echo "No items found for this project";
        }
    }
} else {
    echo "No projects found";
}



}






?>