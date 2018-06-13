<?php
require 'includes/storedb.php';

$id =htmlspecialchars($_GET["id"]);
// sql to delete a record
$sql = "DELETE FROM template WHERE id='".$id."' ";

if ($con->query($sql) === TRUE) {
   header('LOCATION:tmp.php'); die();
}else {
    echo "Error deleting record: " . $con->error;
}

$con->close();
?>