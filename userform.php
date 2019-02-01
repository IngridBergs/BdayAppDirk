<div id='userForm'>
    </form>
    <h1>Gelieve ons de volgende info mee te geven.</h1>
    <form id="g-recaptcha-response" autocomplete="off" action="./includes/signup.inc.php" method="post">
        <input onfocus="$(this).val('')"  type="text" name="uid" value='Uw naam' required><br>
        <input onfocus="$(this).val('')" type="text" name="mail" value="E-mail" required><br>
        <input onfocus="$(this).val('')" type="url" name="url1" value="Plak hier uw youtube link" required>
        <input onfocus="$(this).val('')" type="url" name="url2" value="Plak hier uw youtube link" required><br>
        <input onfocus="$(this).val('')" type="url" name="url3" value="Plak hier uw youtube link" required><br>
        <textarea rows="4" cols="50" name="message" placeholder="Een berichtje voor Dirk?"></textarea><br>
        <button name="signup-submit">Bewaar</button>
    </form>

</div>
<div id='userChange'>
    <form action="./includes/createchange.inc.php" method="post">
    <input onfocus="$(this).val('')" type="text" name="email" value="E-mail.."><br>
    <button name="changes-submit">Aanpassing maken?</button>
</form>
<div class='copyright'>Copyright <?php echo date("Y"); ?> BeCode</div>
    </div>
