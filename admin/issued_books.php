<?php session_start(); 
if (!isset($_SESSION['f_name'])) {
    ?>

    <script type="text/javascript">
        window.location="login.php";
    </script>
    <?php
 }
?><?php include 'connect/connect.php'; ?>
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
					<div class="panel-heading">Issued Books</div>
						<div class="panel-body">
							<?php
                                $sql = "SELECT * FROM issue_books";
                                $result = $conn->query($sql);
							 ?>
							<table class="table table-striped">
								<?php while($row = mysqli_fetch_assoc($result)) : ?>
                                <tr>
                                	<th>reg_no</th>
                                	<th>course</th>
                                	<th>year</th>
                                	<th>sem </th>
                                	<th>book name</th>
                                	<th>date issued</th>
                                </tr>
                                <tr>
                                	<td><?=$row['reg_no']; ?></td>
                                	<td><?=$row['course']; ?></td>
                                	<td><?=$row['year'] ?></td>
                                	<td><?= $row['semister']; ?></td>
                                	<td><?=$row['book_name']; ?></td>
                                	<td><?=$row['issue_date']; ?></td>
                                </tr>
                            <?php endwhile; ?>
                            </table>
						</div>
						<div class="panel-footer"> &copy 2018</div>
				</div>
			</div>
			
		</div>
	</div>

</body>
</html>