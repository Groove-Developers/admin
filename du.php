<?php
require 'includes/usersdb.php';

$id =htmlspecialchars($_GET["id"]);
// sql to delete a record
$sql = "DELETE FROM users_details WHERE id='".$id."' ";

if ($con->query($sql) === TRUE) {
   header('LOCATION:vu.php'); die();
}else {
    echo "Error deleting record: " . $con->error;
}

$con->close();
?>