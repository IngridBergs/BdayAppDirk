<?php


//create connection
$mySqlConnection = new mysqli("localhost", "IngridB", "bananahouse586!", "verjaardagDB");

//check connection

if (!$mySqlConnection) {
      die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
echo "<br><br>";



//https://stackoverflow.com/questions/4249432/export-to-csv-via-php

function setHeader($filename, $filesize)
{
    // disable caching
    $now = gmdate("D, d M Y H:i:s");
    header("Expires: Tue, 01 Jan 2001 00:00:01 GMT");
    header("Cache-Control: max-age=0, no-cache, must-revalidate, proxy-revalidate");
    header("Last-Modified: {$now} GMT");

    // force download
    header("Content-Type: application/force-download");
    header("Content-Type: application/octet-stream");
    header("Content-Type: application/download");
    header('Content-Type: text/x-csv');

    // disposition / encoding on response body
    if (isset($filename) && strlen($filename) > 0)
        header("Content-Disposition: attachment;filename={$filename}");
    if (isset($filesize))
        header("Content-Length: ".$filesize);
    header("Content-Transfer-Encoding: binary");
    header("Connection: close");
}

function getSql()
{
    // return you own sql
    $sql = "SELECT * FROM user_details ORDER BY date;";
    return $sql;
}

function getExportData()
{
    $values = array();

    $sql = $this->getSql();
    if (strlen($sql) > 0)
    {
        $result = dbquery($sql); // opens the database and executes the sql ... make your own ;-)
        $fromDb = mysql_fetch_assoc($result);
        if ($fromDb !== false)
        {
            while ($fromDb)
            {
                $values[] = $fromDb;
                $fromDb = mysql_fetch_assoc($result);
            }
        }
    }
    return $values;
}

function get()
{
    $values = $this->getExportData(); // values as array
    $csv = tmpfile();

    $bFirstRowHeader = true;
    foreach ($values as $row)
    {
        if ($bFirstRowHeader)
        {
            fputcsv($csv, array_keys($row));
            $bFirstRowHeader = false;
        }

        fputcsv($csv, array_values($row));
    }

    rewind($csv);

    $filename = "export_".date("Y-m-d").".csv";

    $fstat = fstat($csv);
    $this->setHeader($filename, $fstat['size']);

    fpassthru($csv);
    fclose($csv);
}

?>
