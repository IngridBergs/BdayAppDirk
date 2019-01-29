<!DOCTYPE html>
<html>
<head>
	<title>music choice</title>
	<link rel="stylesheet" type="text/css" href="music.css">
</head>
<body>
<?php
	include_once 'include/header.php';
?>
	<div class="container">
		<div class="left">
      <div class="formboxl">
        <p>#1 liedje</p>
        <input type="text" name="naam1" placeholder="Titel">
        <input type="text" name="artist1" placeholder="Artiest">
        <input type="text" name="link1" placeholder="Youtube-link">
        <p>#2 liedje</p>
        <input type="text" name="naam2" placeholder="Titel">
        <input type="text" name="artist2" placeholder="Artiest">
        <input type="text" name="link2" placeholder="Youtube-link">
      </div>
    </div>
		<div class="right">
			<div class="formboxr">
				<form>
          <p>#3 liedje</p>
          <input type="text" name="naam3" placeholder="Titel">
          <input type="text" name="artist3" placeholder="Artiest">
          <input type="text" name="link3" placeholder="Youtube-link">
          
          <input type="submit" name="btnchange" value="Aanpassen" id="change">
          <input type="text" name="home" value="Home" id="home">
          <input type="submit" name="btnsave" value="Opslaan" id="save">
					<a href="#">Hulp nodig?</a>
				</form>
			</div>
		</div>
	</div>

</body>
</html>