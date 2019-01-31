<?php

require 'dbh.inc.php';

$sql = "SELECT idUsers , uidUsers, emailUsers , url1, url2, url3 FROM users";
$result = $conn->query($sql);

/*if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["idUsers"]. " - Name: " . $row["uidUsers"]. " E-mail: " . $row["emailUsers"]. "<br>
        Nummer 1:" . $row["url1"] . "Nummer 2:" . $row["url2"]. "Nummer 3:" . $row["url3"] . "<br><br>  ";
    }
} else {
    echo "0 results";
}*/
$conn->close();

?>
