<?php

	$name = $_GET["pname"];

	$quantity = $_GET["quantity"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO stock VALUES ( '', '$name', '$quantity' )" )

		or die("Can not execute query");



	header('Location:stock-info.php');

?>