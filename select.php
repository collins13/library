<?php session_start(); 
if (!isset($_SESSION['reg_no'])) {
    ?>

    <script type="text/javascript">
        window.location="login.php";
    </script>
    <?php
 }
?>
<?php include 'connect/connect.php'; ?>

<?php include 'includes/header.php';  ?>


<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
			  <div class="nav nav-pills nav-stacked">	
				<li class="active h3"><a href="#">categories</a></li>
				<li class="h4"><a href="index.php" class="fa fa-home"> Home</a></li>
				<li class="h4"><a href="issued_books.php" class="fa fa-desktop"> Issued Books</a></li>
				<li class="h4"><a href="select.php" class="fa fa-table"> Borrow Book</a></li>
				<li class="h4"><a href="select.php" class="fa fa-table"> Saggession</a></li>
				<li class="h4"><a href="select.php" class="fa fa-table"> Report a problem</a></li>
				<li class="h4"><a href="select.php" class="fa fa-phone"> Contact</a></li>
			 </div>

			</div>
			<div class="col-md-10">
				<div class="panel panel-info">
					<div class="panel-heading h2">Student Details</div>
						<div class="panel-body">
							<form action="" method="post" class="col-md-6">
								<input type="text" name="name" class="form-control" placeholder="name"><br>
								<input type="text" name="reg_no" class="form-control" placeholder="reg_no"><br>
								<input type="text" name="course" class="form-control" placeholder="course"><br>
								<input type="text" name="year" class="form-control" placeholder="year"><br>
								<input type="text" name="book" class="form-control" placeholder="book name"><br>
								<input type="submit" name="submit"  value="Borrow" class="btn btn-success">
								
							</form>
							
						</div>
						<div class="panel-footer"> &copy 2018</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>