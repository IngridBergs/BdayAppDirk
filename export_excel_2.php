<?php
//export data tot EXCELL
//http://www.phpcodify.com/export-data-to-excel-in-php-mysql/

include_once("Assets/Includes/conn.php");



$sql_queryMessagesExp1 = "SELECT id, name , email, message FROM user_details";
$result1 = mysqli_query($mySqlConnection, $sql_queryMessagesExp1 );

$columnHeader ='';
$columnHeader = "ID"."\t"."NAME"."\t"."EMAIL"."\t"."MESSAGE"."\t";


$setData='';


while ($row = mysqli_fetch_assoc($result1)){

    //$row["id"] $row["name"] $row["email"] $row["message"]
    $rowData = '';
    foreach($row as $value)
    {
      $value = '"' . $value . '"' . "\t";
      $rowData .= $value;
    }
    $setData .= trim($rowData)."\n";


}

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename = Messages.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo ucwords($columnHeader)."\n".$setData."\n";
?>
