<?php

require 'dbh.inc.php';

$sql = "SELECT idUsers , uidUsers, emailUsers , userMessage FROM users";
$result = $conn->query($sql);

/*if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["idUsers"]. " - Name: " . $row["uidUsers"]. " E-mail: " . $row["emailUsers"]. "Message: " . $row["userMessage"]
     . "<br><br>  ";
    }
} else {
    echo "0 results";
}*/



$conn->close();

?>
