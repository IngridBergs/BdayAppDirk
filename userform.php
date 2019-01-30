<?php
$title = 'Welkom!';
?>
<div id='userForm'>
    </form>
    <h1>Gelieve ons de volgende info mee te geven.</h1>
    <form action="./includes/signup.inc.php" method="post">
        <input onfocus="$(this).val('')" type="text" name="uid" value='Uw naam'><br>
        <input onfocus="$(this).val('')" type="text" name="mail" value="E-mail"><br>
        <input onfocus="$(this).val('')" type="url" name="url1" value="Vul hier de titel of naam van de muziekant in."><br>
        <input onfocus="$(this).val('')" type="url" name="url2" value="Vul hier de titel of naam van de muziekant in."><br>
        <input onfocus="$(this).val('')" type="url" name="url3" value="Vul hier de titel of naam van de muziekant in."><br>
        <textarea rows="4" cols="50" name="message" placeholder="Een berichtje voor Dirk?"></textarea><br>
        <button name="signup-submit">Bewaar</button>
    </form>

</div>
<div id='userChange'>
    <form action="./includes/createchange.inc.php" method="post">
    <input onfocus="$(this).val('')" type="text" name="email" value="E-mail of naam.."><br>
    <button name="changes-submit">Aanpassing maken?</button>
</form>
    </div>
