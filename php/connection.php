<?php

$conn = oci_connect("Dillan", "root", "localhost/xe");

if(!$conn)
{

}
else
{
    oci_close($conn);
    header("Location:../about.html");
    exit;
}
?>