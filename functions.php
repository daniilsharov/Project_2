<?php

function navbar(){
    echo 'Dynamic navigation:';
$FolderContent=glob("content/*");
foreach ($FolderContent as $file) {
   $fileName = basename($file);
   $linkAddress = "index.php?s=" . urlencode($file);
   echo '<li style="padding:7px;display:inline;border:solid 1px"> <a style="color:black" href="' . $linkAddress . ' " > ' . $fileName . '</a></li>';
}
}


function content(){
if (!isset($_GET["s"])){
   include("content/index.html");
}
else {
   $result=$_GET["s"];
   include($result);
}
}
?>