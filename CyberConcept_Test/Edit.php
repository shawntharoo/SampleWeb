<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'a';
$con = new mysqli($host, $user, $pass, $db);

if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysqli_select_db($con, $db);
?>

<!DOCTYPE html>
<html lang="en">
   <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/style.css">
    </link>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    </link>
    <link rel="stylesheet" href="css/Style.css">
    </link>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/Slider.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

 <script type="text/javascript">
      function Validate(){

       if (document.form1.CompanyID.value == "")
         {
            alert("Please enter the Comapany ID");
            document.form1.CompanyID.focus();
            return false;
         }
          if (document.form1.P_Title.value == "")
         {
            alert("Please upload the Title");
            document.form1.P_Title.focus();
            return false;
         }
         if (document.form1.P_Contact.value == "")
         {
            alert("Please enter the Name");
            document.form1.P_Contact.focus();
            return false;
         } 
         if (document.form1.P_Designation.value == "")
         {
            alert("Please enter the Designation");
            document.form1.P_Designation.focus();
            return false;
         } 
         if (document.form1.P_Tel.value == "")
         {
            alert("Please enter the Conatct No");
            document.form1.P_Tel.focus();
            return false;
         }
           if (document.form1.P_Tel.value.length!=10)
         {
            alert("Contact number should contain 10 digits");
            document.form1.P_Tel.focus();
            return false;
         }
         if (document.form1.P_Mobile.value == "")
         {
            alert("Please enter the Mobile No");
            document.form1.P_Mobile.focus();
            return false;
         }
           if (document.form1.P_Mobile.value.length!=10)
         {
            alert("Contact number should contain 10 digits");
            document.form1.P_Mobile.focus();
            return false;
         }
         if (document.form1.P_Fax.value == "")
         {
            alert("Please enter the Fax No");
            document.form1.P_Fax.focus();
            return false;
         }
           if (document.form1.P_Fax.value.length!=10)
         {
            alert("Fax number should contain 10 digits");
            document.form1.P_Fax.focus();
            return false;
         }

          if (document.form1.P_Email.value == "")
         {
            alert("Please Enater the Email");
            document.form1.P_Email.focus();
            return false;
         }
      return true;

      }
    </script>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="cyberconceptslk.com">Cyber Concepts</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="Add_Contact.php">Add Customer</a></li>
      <li class="active"><a href="Edit.php">Edit Customer</a></li>
    </ul>
  </div>
</nav>

</head>
<body>
  <form class="navbar-form" role="search" action="" method="post">
    <div class="input-group add-on">
      <input class="form-control" placeholder="Search" name="term" id="term" type="text">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
  </form>

<?php
if (!empty($_REQUEST['term'])) {

$term = mysqli_real_escape_string($con, $_REQUEST['term']);     
$sql = "SELECT * FROM customer_contact WHERE C_ID = '".$term."'"; 

//$sql = "SELECT * FROM customer_contact WHERE C_ID LIKE '%".$term."%'"; 
$r_query = mysqli_query($con, $sql); ?>

<div class="container">
  <div class="row">
   <div class="col-sm-2">
   </div>
   <div class="col-sm-8">

<?php while ($row = mysqli_fetch_array($r_query)){  ?>
<form class="form-horizontal" name="form1" method="POST" onsubmit="return Validate()" action="Edit_Contact_form.php">
	<div class="form-group">
	<label for="email">Customer Id:</label>
	<input type="text" class="form-control" name="C_ID" Value="<?php echo $row['C_ID'] ?>" > 
	</div>
	<div class="form-group">
	<label for="email">Company Id:</label>
	<input type="text" class="form-control" name="CompanyID" Value="<?php echo $row['CompanyID'] ?>"> 
	</div>
	<div class="form-group">
	<label for="email">Title:</label>
	<input type="text" class="form-control" name="P_Title" placeholder="Enter the title" Value="<?php echo $row['P_Title'] ?>"> 
	</div>
	<div class="form-group">
	<label for="email">Name:</label>
	<input type="text" class="form-control" name="P_Contact" placeholder="Enter your name" Value="<?php echo $row['P_Contact'] ?>"> 
	</div>
	<div class="form-group">
	<label for="email">Designation:</label>
	<input type="text" class="form-control" name="P_Designation" placeholder="Enter your designation" Value="<?php echo $row['P_Designation'] ?>"> 
	</div>
	<div class="form-group">
	<label for="email">Lan Line:</label>
	<input type="text" class="form-control" name="P_Tel" placeholder="Enter your telephone number" Value="<?php echo $row['P_Tel'] ?>"> 
	</div>
	<div class="form-group">
	<label for="email">Mobile:</label>
	<input type="text" class="form-control" name="P_Mobile" placeholder="Enter your mobile" Value="<?php echo $row['P_Mobile'] ?>"> 
	</div>
	<div class="form-group">
	<label for="email">Fax:</label>
	<input type="text" class="form-control" name="P_Fax" placeholder="Enter your fax" Value="<?php echo $row['P_Fax'] ?>">
	</div>
	<div class="form-group">
	<label for="email">Email:</label>
	<input type="email" class="form-control" name="P_Email" placeholder="Enter your email" Value="<?php echo $row['P_Email'] ?>"> 
	</div> 
	<div class="form-group">
	<button type="submit" class="btn btn-primary  btn-lg" name="Sub_button" value="submit">Update </button>
	<button type="button" class="btn btn-danger  btn-lg" name="Sub_button" onclick="javascript:Delete(<?php echo $row['C_ID'] ?>)">Delete </button>
	</div>
</form>

<?php }  

}
?>
</body>
</div>
</div>

   <script type="text/javascript">
      function Delete(C_ID)
      {
       if(confirm('Are you sure To Delete This Contact ?'))
       {
        window.location.href='delete_Contact_form.php?C_ID='+C_ID;
       }
      }
    </script>
</html>
 