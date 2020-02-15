<?php
include 'dbConnection.php';

$conn = OpenCon();
$nome =  $_POST["nome"];
$tipo =  $_POST["tipo"];
$descricao =  $_POST["descricao"];

$sql = "INSERT INTO arquivo (nome, tipo, descricao) VALUES ('$nome', '$tipo', '$descricao')";

if ($conn->query($sql) === TRUE) {
	echo "Success<br>";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

CloseCon($conn);

echo "Formulário enviado!<br>";
echo "<a href='../create.php'>Retornar para a pagina inicial.</a>";
