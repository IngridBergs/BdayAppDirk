<?php
$title = 'admin gebied';
?>

<p>Welkom Dirk</p>
<form action='./includes/logout.inc.php' method='post'>
<button name="login-submit">logout</button>
<div class='adminCardUserRows'>
<?php require './includes/cards.inc.php'

?>
</div>
</form>