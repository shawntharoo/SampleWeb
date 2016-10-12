<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'a';
$conn = new mysqli($host, $user, $pass, $db);


//Asighn Data to the Variables
$CompanyID       = $_POST['CompanyID'];
$P_Title        = $_POST['P_Title'];
$P_Contact 		= $_POST['P_Contact'];
$P_Designation     = $_POST['P_Designation'];
$P_Tel       = $_POST['P_Tel'];
$P_Mobile       = $_POST['P_Mobile'];
$P_Fax       = $_POST['P_Fax'];
$P_Email       = $_POST['P_Email'];

$sql = "INSERT INTO customer_contact (CompanyID,P_Title,P_Contact,P_Designation,P_Tel,P_Mobile,P_Fax,P_Email)
VALUES ('$CompanyID','$P_Title','$P_Contact','$P_Designation','$P_Tel','$P_Mobile','$P_Fax','$P_Email')";
mysqli_query($conn, $sql);

header('Location: Add_Contact.php');
mysqli_close($conn);

?>