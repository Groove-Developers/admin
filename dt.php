<?php
require 'includes/admindb.php';
$id =htmlspecialchars($_GET["id"]);
// sql to delete a record
$sql = "DELETE FROM todo WHERE id='".$id."' ";

if ($con->query($sql) === TRUE) {
   header('LOCATION:main.php'); die();
}else {
    echo "Error deleting record: " . $conn->error;
}

$con->close();
?>