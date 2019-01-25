<?php
/*echo 'artiest ' . $_POST["artiest"];
echo "<br>";
echo 'titel  ' . $_POST["titel"];
echo "<br>";
echo 'url  ' . $_POST["url"];*/


$artiest = $_POST["artiest"];
$titel = $_POST["titel"];
$url = $_POST["url"];




$myfile = fopen("music.txt", "w") or die("Unable to open file!");
$txt = $artiest . "   " . $titel . "  " . $url;
echo $txt;
fwrite($myfile, $txt);
fclose($myfile);


//https://www.youtube.com/watch?v=PbgKEjNBHqM Youtube url Nirvana in Bloom
?>
