<?php
include("conn.php");
$id=$_POST["ID"];

$sql= "DELETE FROM photo WHERE id='$id'";

$run = mysqli_query($conn,$sql);
if ($run) {
    header("location:Admin.php");
 }
?>