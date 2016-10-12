<html>
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
      <li class="active"><a href="Add_Contact.php">Add Customer</a></li>
      <li><a href="Edit.php">Edit Customer</a></li>
    </ul>
  </div>
</nav>
</head>

<div class="container">
  <div class="row">

        <center>
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width:550px; height:230px">
          <!-- Indicators -->
          <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox" style="width:550px; height:230px">
          <div class="item active">
            <img src="img/Capture.png" height="200px" width="750px" alt="...">
            <div class="carousel-caption">
              ...
            </div>
          </div>
            <div class="item">
            <img src="img/Capture1.png" height="200px" width="750px" alt="...">
            <div class="carousel-caption">
              ...
            </div>
          </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
          </a>
        </div>
     </center>
   <div class="col-sm-2">
   </div>
   <div class="col-sm-8">

<body><br>
<form class="form-horizontal" name="form1" method="POST" onsubmit="return Validate()" action="Add_Contact_form.php">
    <h1> Contact Infromation </h1>
	<div class="form-group">
	<label for="email">Company Id:</label>
	<input type="text" class="form-control" name="CompanyID" placeholder="Enter your Company ID"> 
	</div>
	<div class="form-group">
	<label for="email">Title:</label>
	<input type="text" class="form-control" name="P_Title" placeholder="Enter the title"> 
	</div>
	<div class="form-group">
	<label for="email">Name:</label>
	<input type="text" class="form-control" name="P_Contact" placeholder="Enter your name"> 
	</div>
	<div class="form-group">
	<label for="email">Designation:</label>
	<input type="text" class="form-control" name="P_Designation" placeholder="Enter your designation"> 
	</div>
	<div class="form-group">
	<label for="email">Lan Line:</label>
	<input type="text" class="form-control" name="P_Tel" placeholder="Enter your telephone number"> 
	</div>
	<div class="form-group">
	<label for="email">Mobile:</label>
	<input type="text" class="form-control" name="P_Mobile" placeholder="Enter your mobile"> 
	</div>
	<div class="form-group">
	<label for="email">Fax:</label>
	<input type="text" class="form-control" name="P_Fax" placeholder="Enter your fax">
	</div>
	<div class="form-group">
	<label for="email">Email:</label>
	<input type="email" class="form-control" name="P_Email" placeholder="Enter your email"> 
	</div> 
	<div class="form-group">
	<button type="submit" class="btn btn-primary  btn-lg" name="Sub_button" value="submit">Add </button>
	</div>
</form>
</body>

</div>
</div>

</html>