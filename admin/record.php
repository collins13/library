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

<?php include 'connect/connect.php'; ?>
<?php include 'includes/header.php';  ?>


<div class="container-fluid">
		<div class="row">
			
			<div class="col-md-2">
			  <div class="nav nav-pills nav-stacked">	
				<li class="active"><a href="#"></a></li>
				<li class="h4"><a href="index.php" class="fa fa-home"> Home</a></li>
				<li class="h4"><a href="student_display.php" class="fa fa-desktop">  tudent Info</a></li>
				<li class="h4"><a href="add_book.php" class="fa fa-table"> Add Book</a></li>
				<li class="h4"><a href="issue_book.php" class="fa fa-edit"> Issue book</a></li>
				<li class="h4"><a href="returned_books.php" class="fa fa-table"> Returned Book</a></li>
				<li class="h4"><a href="book_details.php" class="fa fa-table"> Book Details</a></li>
				<li class="h4"><a href="issued_books.php" class="fa fa-table"> issued Books</a></li>
			 </div>
			 </div>

			
			<div class="col-md-10">
				<div class="panel panel-info">
					<div class="panel-heading">Dashbord</div>
						<div class="panel-body">
							<?php
                       $book_name = $_GET['book_name'];
                                 $sql1 = "SELECT * FROM issue_books WHERE book_name='$_GET[book_name]';";
                                 $result1 = $conn->query($sql1);
							  ?>
							  <table class="table table-striped">
							  	<tr>
							  		<th>Student Name</th>
							  		<th>Student Reg.No</th>
							  		<th> Student Contact</th>
							  		<th>Student year</th>
							  		<th>Student Course</th>
							  		<th>Bok Name</th>
							  		<th>Issue date</th>
							  	</tr>
							  	<?php while($row1 = mysqli_fetch_assoc($result1)) : ?>
							  		<tr>
							  			<td><?=$row1['student_name']; ?></td>
							  			<td><?=$row1['reg_no']; ?></td>
							  			<td><?=$row1['student_contact'] ?></td>
							  			<td><?=$row1['year']; ?></td>
							  			<td><?=$row1['course']; ?></td>
							  			<td><?=$row1['book_name']; ?></td>
							  			<td><?=$row1['return_date'];?></td>
							  		</tr>
							  	<?php endwhile; ?>
							  </table>

							</div>
						</div>
						<div class="panel-footer"> &copy 2016</div>
				</div>
			</div>
			
		</div>
	</div>

</body>
</html>