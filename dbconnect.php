<?php
$serverName = "rakshadb.database.windows.net";
$connectionOptions = array(
    "Database" => "rakshadb",
    "Uid" => "raksha1",
    "PWD" => "gintutom@1"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn)
echo "Connection Successful";
else
echo "Connection Fail";
?>