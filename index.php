<html>

<head>
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<style>
		.error {color: #FF0000;}
	</style>
</head>

<body>

	<h1>A small example page to insert some data in to the MySQL database using PHP</h1>

	<form action="insert.php" method="post">

	Product Code: <input type="text" name="productCode" maxlength="3"/>
	<span class="error">*</span>
	<br><br>

	Name: <input type="text" name="name" />
	<span class="error">*</span>
	<br><br>

	Quantity: <input type="number" name="quantity" />
	<span class="error">*</span>
	<br><br>

	Price: <input type="number" name="price" step="0.01" />
	<span class="error">*</span>
	<br><br>

<input type="submit" />

</form>

<?php include './list.php';?>

</body>
</html>