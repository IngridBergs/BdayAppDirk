<?php

require 'dbh.inc.php';
$sql = "SELECT idUsers, uidUsers, emailUsers, userMessage, url1, url2, url3 FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    function convert($url)
        {
            $new = $url;
            $new =preg_replace("#.*youtube\.com/watch\?v=#", "", $new);
            $new ='<iframe width="300" height="160" src="http://www.youtube.com/embed/'.$new.'" frameborder="0" allowfullscreen></iframe>';
            return $new;
        }
    while ($row = $result->fetch_assoc()) {

        

        echo
            "<ul class='rowsuserinfo'>
        <li> Naam: " . $row["uidUsers"] . " </li>
        <li> E-mail: " . $row["emailUsers"] . "</li>
        <li> Bericht    : " . $row["userMessage"] . "</li>
        </ul>
        <ul class='rowusersongs'>
        <li>Nummer 1:<br>" . convert($row["url1"]) . "</li>
        <li>Nummer 2:<br>" . convert($row["url2"]) . "</li>
        <li>Nummer 3:<br>" . convert($row["url3"]). "</li>
        </ul>";
    }
} else {
    echo "0 results";
}
$conn->close();
