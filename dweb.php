<?php
require 'includes/storedb.php';

$id =htmlspecialchars($_GET["id"]);
// sql to delete a record
$sql = "DELETE FROM website WHERE id='".$id."' ";

if ($con->query($sql) === TRUE) {
   header('LOCATION:web.php'); die();
}else {
    echo "Error deleting record: " . $con->error;
}

$con->close();
?>