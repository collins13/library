<?php include 'connect/connect.php'; ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>library</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
   <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css" >
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
</head>
<body>

      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Student Library</a>
        </div>
        <div class="navbar-collapse collapse">
        </div><!--/.navbar-collapse -->
      </div>
    </div>



<?php

if (isset($_POST['submit'])) {

 include 'connect/connect.php';

   $f_name = $_POST['f_name'];
   $l_name = $_POST['l_name'];
   $reg_no = $_POST['reg_no'];
   $course = $_POST['course'];
   $sem = $_POST['sem'];
   $year = $_POST['year'];
   $password = $_POST['password'];

   if (empty($f_name) || empty($l_name) || empty($reg_no) || empty($password) || empty($course) || empty($year) || empty($sem)) {
        echo "<div class='alert alert-danger'>all fields are required</div>";
   }else{
        $sql = "INSERT INTO student(f_name, l_name, reg_no, course, sem, year, password, status) VALUES('$f_name', '$l_name', '$reg_no', '$course', '$sem', '$year', '$password', 'no')";
    $result = $conn->query($sql);
if ($sql) {
    echo "<div class='alert alert-success col-lg-12 col-lg-push-0'>
     Account created successfully
    </div>";
    header("Location:login.php");
     }
   }


    
}


?>


     <div id="wrapper">
     	<div class="signup_page">
     		<div class="col-md-3">
     		</div>
     		<div class="col-md-6">
     				<h1 style="position: center;"><strong>CREATE ACCOUNT</strong></h1>
                    <form action="signup.php" method="POST">
     			<div class="form-group">
     				<input type="text" name="f_name" class="form-control" placeholder="First Name" style="width: 400px;">
     			</div>
                    <div class="form-group">
                         <input type="text" name="l_name" class="form-control" placeholder="Last name" style="width: 400px;">
                    </div>
                    <div class="form-group">
                         <input type="text" name="reg_no" class="form-control" placeholder="Reg no" style="width: 400px;">
                    </div>
                    <div class="form-group">
                         <input type="text" name="course" class="form-control" placeholder="your course" style="width: 400px;">
                    </div>
                    <div class="form-group">
                         <input type="int" name="year" class="form-control" placeholder="year of study" style="width: 400px;">
                    </div>
                     <div class="form-group">
                         <input type="int" name="sem" class="form-control" placeholder="semister" style="width: 400px;">
                    </div>
     			<div class="form-group">
     				<input type="password" name="password" class="form-control" placeholder="password" style="width: 400px;">
     			</div>
     			<input type="submit" name="submit" class="btn btn-success" value="Create Account">
                    </form>
     			<p><br></p>
     			<p><br></p>
     			   <hr>
     		<div class="col-md-3">
     		</div>
     	</div>	
     </div>

 </div>
</body>
</html>