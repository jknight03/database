<?php
require_once("db.php");
$sql = "DELETE FROM customer WHERE customerid='" . $_GET["customerid"] . "'";
mysqli_query($conn,$sql);
header("Location:index.php");
?>
