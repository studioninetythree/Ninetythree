<?php
    $user = "Dillan";
    $password = "rooft";
    $server = "localhost/xe";
    $database = "Dillan";
    $conn = oci_connect($user, $password, $server);
    error_reporting(1);
    if(!$conn)
    {
       header("Location:../pages/error.php");
    }
    else
    {
        oci_close($conn);
        header("Location:../pages/about.php");
        exit;
    }
?>