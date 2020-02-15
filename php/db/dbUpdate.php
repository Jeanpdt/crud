<?php
include 'dbConnection.php';

$conn = OpenCon();
$id = $_POST["id"];
$nome =  $_POST["nome"];
$tipo =  $_POST["tipo"];
$descricao =  $_POST["descricao"];

$sql = "UPDATE arquivo SET nome='$nome', tipo='$tipo', descricao='$descricao'  WHERE id=$id";

if ($conn->query($sql) === TRUE) {
	echo "Record updated successfully";
	echo "<a href='../update.php'>return to update</a>";
} else {
	echo "Error updating record: " . $conn->error;
}

CloseCon($conn);
