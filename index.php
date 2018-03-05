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
							<?php
                               $sql = "SELECT * FROM student WHERE reg_no='$_SESSION[reg_no]'";
                               $result = $conn->query($sql);
							?>
							<table class="table table-bordered">
									<thead>
										<tr>
											<th>#</th>
											<th>First Name</th>
											<th>Last name</th>
											<th>Reg No.</th>
											<th>Course</th>
											<th>Year of study</th>
										</tr>
									</thead>
									<tbody>
										<?php while($row = mysqli_fetch_assoc($result)) :?>
										<tr>
											<td><?php echo $row['id']; ?></td>
											<td><?php echo $row['f_name']; ?></td>
											<td><?php echo $row['l_name']; ?></td>
											<td><?php echo $row['reg_no']; ?></td>
											<td><?php echo $row['course']; ?></td>
											<td><?php echo $row['year']; ?></td>
										</tr>
									<?php endwhile; ?>
									</tbody>
 
                                </table>
						</div>
						<div class="panel-footer"> &copy 2018</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>