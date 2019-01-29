

<?php
$url = 'https://www.youtube.com/watch?v=PbgKEjNBHqM&list=RDPbgKEjNBHqM&start_radio=1';

/*$url = 'https://www.youtube.com/watch?v=u9-kU7gfuFA';
echo "<br>";
echo "<br>";
echo "Nirva - in Bloom";
echo "<br>";
echo "<br>";
echo $url;
echo "<br>";*/

preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
$id = $matches[1];
$width = '800px';
$height = '450px';
?>

<iframe id="ytplayer" type="text/html" width="<?php echo $width ?>" height="<?php echo $height ?>"
src="https://www.youtube.com/embed/<?php echo $id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
frameborder="0" allowfullscreen></iframe>
