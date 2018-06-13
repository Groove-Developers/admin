<?php
require 'includes/projectdb.php';

$id =htmlspecialchars($_GET["id"]);
// sql to delete a record
$sql = "DELETE FROM jobs WHERE id='".$id."' ";

if ($con->query($sql) === TRUE) {
   header('LOCATION:vjobs.php'); die();
}else {
    echo "Error deleting record: " . $con->error;
}

$con->close();
?>