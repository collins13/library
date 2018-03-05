<?php
session_start();
if (!isset($_SESSION['f_name'])) {
    ?>

    <script type="text/javascript">
        window.location="login.php";
    </script>
    <?php
 }
?>

<?php include 'includes/header.php';  ?>
<?php include '../connect/connect.php'; ?>


<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
			  <div class="nav nav-pills nav-stacked">	
				<li class="active"><a href="#"></a></li>
				<li class="h4"><a href="index.php" class="fa fa-home"> Home</a></li>
				<li class="h4"><a href="student_display.php" class="fa fa-desktop">  Student Info</a></li>
				<li class="h4"><a href="add_book.php" class="fa fa-table"> Add Book</a></li>
				<li class="h4"><a href="issue_book.php" class="fa fa-edit"> Issue book</a></li>
				<li class="h4"><a href="returned_books.php" class="fa fa-table"> Returned Book</a></li>
				<li class="h4"><a href="book_details.php" class="fa fa-table"> Book Details</a></li>
				<li class="h4"><a href="issued_books.php" class="fa fa-table"> issued Books</a></li>
			 </div>

			</div>
			<div class="col-md-10">
				<div class="panel panel-info">
					<div class="panel-heading h2">ADMIN PANEL</div>
						<div class="panel-body">
							<?php
                               $sql = "SELECT * FROM student";
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
											<th>status</th>
											<th>Approved</th>
											<th>Not Approved</th>
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
											<td><?php echo $row['status']; ?></td>
											<td><a href="aprove.php?id=<?php echo $row['id'] ?>">Approved</a></td>
											<td><a href="not_aprove.php?id=<?php echo $row['id'] ?>">Not Approved</a></td>
										</tr>
									<?php endwhile; ?>
									</tbody>
 
                                </table>
						</div>
						<div class="panel-footer"> &copy 2016</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>