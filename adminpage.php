<?php
$title = 'admin gebied';
?>

<p>Welkom Dirk</p>
<form action='./includes/logout.inc.php' method='post'>
<button name="login-submit">logout</button>

<!--<button name="export_1" >Exporteer de songs</button>
<button name="export_1">Exporteer de berichtjes</button>-->
<a href="export_songs.php">export songs</a>
<a href="export_messages.php">export messages</a>

<div class='adminCardUserRows'>
<?php require './includes/cards.inc.php'

?>
</div>
</form>
