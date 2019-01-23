<?php require "header.php";?>
<main>
    <h1>Beste gebruiker, gelieve de volgende info aan ons mee te geven.</h1>
    <form action="./includes/signup.inc.php" method="post">
        <label>Jou naam:</label>
        <input type="text" name="uid" placeholder="Uw naam"><br>
        <label>E-mail:</label>
        <input type="text" name="mail" placeholder="E-mail"><br>
        <label>Een bericht voor Dirk?</label><br>
        <textarea rows="4" cols="50" name="message" placeholder="Een berichtje voor Dirk?"></textarea><br>
        <label>Geef hier de verschillende nummers op die jij graag zou horen.</label><br>
        <input type="text" name="url1" placeholder="Vul hier de titel of naam van de muziekant in."><br>
        <input type="text" name="url2" placeholder="Vul hier de titel of naam van de muziekant in."><br>
        <input type="text" name="url3" placeholder="Vul hier de titel of naam van de muziekant in."><br>
        <button id='bewaar' name="signup-submit">Bewaar</button>
    </form>
</main>
<?php require "footer.php";?>