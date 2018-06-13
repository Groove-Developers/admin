<?php
require 'includes/storedb.php';

$id =htmlspecialchars($_GET["id"]);
// sql to delete a record
$sql = "DELETE FROM graphics WHERE id='".$id."' ";

if ($con->query($sql) === TRUE) {
   header('LOCATION:grp.php'); die();
}else {
    echo "Error deleting record: " . $con->error;
}

$con->close();
?>