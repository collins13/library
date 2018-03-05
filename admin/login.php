
<?php session_start();?>
<?php include 'connect/connect.php'; ?>

<?php include '../functions/functions.php';  ?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>library</title>

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
   <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css" >
  <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.css">
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

    <p><br/></p>
    <p><br/></p>
    <p><br/></p>
    <p><br/></p>


<?php
if (isset($_POST['submit'])) {
    $f_name = $_POST['f_name'];
    $password = $_POST['password'];

    $count = 0;

    $sql = "SELECT * FROM librarian WHERE f_name='$f_name'AND password='$password'";
    $result = $conn->query($sql);
    $count = mysqli_num_rows($result);

    if ($count ==0 ) {
        echo "<div class='alert alert-danger'>Invalid Reg No or Password</div>";
   
    ?>
    <?php
}else{
  $_SESSION['f_name'] = $f_name;

    ?>
    <script type="text/javascript">
         window.location="index.php";
    </script>
    <?php
    }
}

?>

     <div id="wrapper" style="border: 1px; solid black;">
     	<div class="login_page">
     		<div class="col-md-3">
     		</div>
     		<div class="col-md-6">
     				<h1 class="col-md-6 col-md-pull-center"><strong>ADMIN LOGIN</strong></h1>
                         <form action="login.php" method="POST">
     			<div class="form-group">
     				<input type="text" name="f_name" class="form-control" placeholder="Librarian name" style="width: 400px;">
     			</div>
     			<div class="form-group">
     				<input type="password" name="password" class="form-control" placeholder="password" style="width: 400px;">
     			</div>
     			<input type="submit" name="submit" class="btn btn-success" value="Login">
     			<a href="#" style="margin-left: 40px;">forgot password?</a>
                     </form>
     			<p><br></p>
     			<p><br></p>
     			   <hr>

     			
     		</div>
     		<div class="col-md-3">
     		</div>
     	</div>	
     </div>

 </body>
 </html>