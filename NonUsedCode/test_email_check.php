<?php

  $name= $_POST['name'];
  $email = $_POST['email'];




  	$sql_email = "SELECT * FROM user_details WHERE email = '$email' ";
  	$result_email = mysqli_query("verjaardagDB", $sql_email);

    if(mysqli_num_rows($result_email) > 0){
  	  $email_error = "Sorry... email already taken";
  	}else{
           $query = "INSERT INTO user_details (id, name, email, message, artiest, title_song, url)
      	    	  VALUES ()";
           $results = mysqli_query("verjaardagDB", $query);
           echo 'Saved!';
           exit();
  	}

?>
