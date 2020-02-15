<?php
include './db/dbConnection.php';

$conn = OpenCon();
$sql = "SELECT id, nome, tipo, descricao FROM arquivo";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<div class='container'>
		<table class='table table-borderless'>
			<thead>
				<tr>
					<th scope='col'>ID</th>
					<th scope='col'>Nome</th>
					<th scope='col'>Tipo</th>
					<th scope='col'>Descrição</th>
				</tr>
			<thead>";
	echo "<tbody>";
	while ($row = $result->fetch_assoc()) {
		echo "<tr>
			<th scope='row'>" . $row["id"] . "</th>
			<td>" . $row["nome"] . "</td>
			<td>" . $row["tipo"] . "</td>
			<td>" . $row["descricao"] . "</td>
			</tr>";
	}
	echo "</tbody>";
	echo "</table>";
} else {
	echo "0 results";
}
CloseCon($conn);
