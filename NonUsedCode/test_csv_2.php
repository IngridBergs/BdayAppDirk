<?php
//create connection
$mySqlConnection = new mysqli("localhost", "IngridB", "bananahouse586!", "verjaardagDB");

//check connection

if (!$mySqlConnection) {
      die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
echo "<br><br>";

// output headers so that the file is downloaded rather than displayed
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data_verjaardag.csv');

// create a file pointer connected to the output stream
//hier zit ik nog vast !
$output = fopen('php://output', 'w');

// output the column headings
fputcsv($output, array('Column 1', 'Column 2', 'Column 3'));

// fetch the data

$rows = mysqli_query('SELECT * FROM user_details');

// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);


?>
