<?php

	$id = $_GET["id"];

	$name = $_GET["name"];

	$quantity = $_GET["quantity"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE stock SET name='$name', quantity='$quantity' WHERE id = $id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



header('Location:stock-info.php');

?>