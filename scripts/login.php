<?php
include('connection.php');
error_reporting(1);

$clientUsername = "Dillan";
$clientPassword = "1234";

if(($clientUsername == "Dillan") && ($clientPassword == "7892"))
{
    oci_close($conn);
    header("Location:../pages/clientdashboard.php");
    exit;
}
else
{
header("Location:../pages/error.php");
}
?>