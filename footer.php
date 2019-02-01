<footer></footer>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src='./assets/js/app.js'></script>
<script>
grecaptcha.ready(function() {
grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'action_name'})
.then(function(token) {
document.getElementById('g-recaptcha-response').value=token;
});
});
</script>
</body>
</html>
