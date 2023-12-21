<?php
$conn = mysqli_connect("localhost", "root", "", "collectionofflower");
$ID = $_GET["ID"];
// echo $id;

$sql = "DELETE FROM photo WHERE ID=$ID";

$run = mysqli_query($conn, $sql);
// if ($run) {
//     header("location:Admin.php");
//  }
// 
