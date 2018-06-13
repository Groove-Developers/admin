<?php
require 'includes/projectdb.php';

$id =htmlspecialchars($_GET["id"]);
// sql to delete a record
$sql = "DELETE FROM users_project WHERE id='".$id."' ";

if ($con->query($sql) === TRUE) {
   header('LOCATION:vpro.php'); die();
}else {
    echo "Error deleting record: " . $con->error;
}

$con->close();
?>