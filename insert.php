<html>

<body>


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

echo "Connected successfully";
echo "<br>";

$productCode = mysqli_real_escape_string($conn, $_REQUEST['productCode']);
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$quantity = mysqli_real_escape_string($conn, $_REQUEST['quantity']);
$price = mysqli_real_escape_string($conn, $_REQUEST['price']);

// echo $productCode;
// echo "<br>";
// echo $name;
// echo "<br>";
// echo $quantity;
// echo "<br>";
// echo $price;
// echo "<br>";

if ($productCode || $name || $quantity || $price == '') {
	echo "Kindly fill in all the required fields.";
} else {
	$sql = "INSERT INTO products (productCode, name, quantity, price)
	VALUES ('$productCode', '$name', '$quantity', '$price')";

	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();
echo "<br>";
echo "Connection ended.";
?>

</body>

</html>