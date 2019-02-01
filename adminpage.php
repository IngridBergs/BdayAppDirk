<form action='./includes/logout.inc.php' method='post'>
<button id='logoutButton' name="login-submit">logout</button>
<a class='exSongsButton' href="export_songs.php"><span>Muziek   </span><i class="fas fa-music"></i></a>
<a class='exMessButton' href="export_messages.php"><span>Berichten</span><i class="fas fa-comment"></i></a>
<div class='adminCardUserRows'>
<?php 

require './includes/cards.inc.php'

?>
</div>
</form>
