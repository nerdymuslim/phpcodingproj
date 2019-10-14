<?php
session_start();
$conn = new mysqli("localhost", "root", "", "crud") or die(mysqli_error($conn));
$id = 0;
$update = false;
$username = "";
$password = "";
if (isset($_POST['save'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$conn->query("INSERT INTO `account` (`id`, `username`, `password`) VALUES (NULL,'$username', '$password'); ") or die($conn->error());
	$_SESSION['message'] = "Your Record has been saved!";
	$_SESSION['msg_type'] = "success";

	header("location: index.php");
}

if (isset($_GET['delete'])) {

	$delete = $_GET['delete'];
	$conn->query("DELETE FROM `account` WHERE `account`.`id` = $delete") or die($conn->error());
	$_SESSION['message'] = "Your Record has been deleted";
	$_SESSION['msg_type'] = "danger";

	header("location: index.php");
}

if (isset($_GET['edit'])) {

	$edit = $_GET['edit'];
	$update = true;
	$result = $conn->query("SELECT * FROM `account` WHERE `account`.`id` = $edit") or die($conn->error());
	if (count($result)) {
		$row = $result->fetch_array();
		$username = $row['username'];
		$password = $row['password'];
	}
}

if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$conn->query("UPDATE `account` SET `password` = 'dddc' WHERE `account`.`id` = $id;") or die($conn->error);
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";

	header('location: index.php');
}
