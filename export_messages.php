<?php
require_once("includes/messages.inc.php");

$columnHeader ='';
$columnHeader = "ID"."\t"."NAME"."\t"."EMAIL"."\t"."MESSAGE"."\t";


$setData='';

while ($row = mysqli_fetch_assoc($result)){

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
