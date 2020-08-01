<html>

<head>
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<style>
		table, th, td {
	    	border: 1px solid black;
		}
	</style>
</head>

<?php

	$servername = "localhost";
	$username = "southwind_admin";
	$password = "southwind";
	$dbname = "southwind";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT productID, productCode, name, quantity, price FROM products";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo "<table><tr><th>Product ID</th><th>Product Code</th></tr>";
		// output data of each row
		while($row = $result->fetch_assoc()) {
			// echo "<tr><td>".$row["productID"]."</td><td>".$row["productCode"]."</td><td>".$row["name"]."</td><td>".$row["quantity"]."</td><td>".$row["price"]."</td></tr>";
			echo "<tr><td>" . $row["productID"]. "</td><td>" . $row["productCode"]. "</td></tr>";
			// echo "Product ID: " . $row["productID"]. "<br>";
			// echo "Product Code: " . $row["productCode"]. "<br>";
		}
	echo "</table>";
	} else { echo "0 results"; }
	$conn->close();

?>

</body>
</html>