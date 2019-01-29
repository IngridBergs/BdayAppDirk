<?php
//ob_start();
//Start new or resume existing session
//creates a session or resumes the current one based on a
// session identifier passed via a GET or POST request, or passed via a cookie.
include_once "Assets/Includes/conn.php";
session_start();
echo ("session id" . session_id());
require 'header.php';
$msg = 'login succesful';

if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
    if ($_POST['username'] == 'DirkVranken' &&
        $_POST['password'] == 'blub') {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = 'DirkVranken';
        echo "You have entered valid username and password";
        //maak een knop naar admin.php of schakel die vanaf hier door
        header('Location: admin.php');
    } else {
        echo "Wrong username or password , please try again!";
    }
}
?>

      <div class = "container">
         <form  role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
            <h4><?php echo $msg; ?></h4>
            <input type = "text"  name = "username" required autofocus>
            <input type = "password" name = "password" required>
            <button  type = "submit" name = "login">Login</button>
         </form>
          <a href = "logout.php" tite = "Logout">Session.
      </div>
   </body>
</html>
