<?php 

require 'dbh.inc.php';

$sql = "SELECT idUsers, uidUsers, emailUsers, userMessage, url1, url2, url3 FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<ul class='rowsuserinfo'><li>no: " . $row["idUsers"]. "</li><li> Naam: " . $row["uidUsers"]. " </li> <li> E-mail: " . $row["emailUsers"]. "</li></ul>
        <ul class='rowusersongs'>   <li>Nummer 1:" . $row["url1"] . "</li><li>Nummer 2:" . $row["url2"]. "</li><li>Nummer 3:" . $row["url3"] . "</li>  </ul>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>