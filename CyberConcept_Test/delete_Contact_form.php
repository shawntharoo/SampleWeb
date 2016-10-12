<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'a';
$conn = new mysqli($host, $user, $pass, $db);

$C_ID       = $_GET['C_ID'];

$sql = "DELETE FROM customer_contact where C_ID=$C_ID";
mysqli_query($conn, $sql);

header('Location: Add_Contact.php');
mysqli_close($conn);

?>