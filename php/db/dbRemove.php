<?php
include 'dbConnection.php';

$conn = OpenCon();

$id = $_POST['id'];

$sql = "DELETE FROM arquivo WHERE id=$id";

if ($conn->query($sql) === TRUE) {
	echo "Record deleted successfully";
} else {
	echo "Error deleting record: " . $conn->error;
}

CloseCon($conn);

echo "<br><a href='../delete.php'>Retornar para delete</a>";
