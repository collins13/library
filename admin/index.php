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
	<form class="col-lg-4" style="float: right;">
		<table class="table">
			<tr>
				<td>
					<input type="tetx" name="search" placeholder="search" class="form-control">
				</td>
				<td>
					<input type="submit" name="submit" value="search" class="btn btn-success" >
				</td>
			</tr>
		</table>
	</form>
	<div class="clearfix"></div>
	<p><br/></p>
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
                               $sql = "SELECT * FROM add_books";
                               $result = $conn->query($sql);
							?>
							<table class="table table-bordered">
									<thead>
										<tr>
											<th>#</th>
											<th>Book Name</th>
											<th>book author</th>
											<th>Book publication</th>
											<th>Purchase date</th>
											<th>Book price</th>
											<th>Quantity</th>
											<th>Available copies</th>
											<th>Available copies</th>
											<th>Delete Books</th>
										</tr>
									</thead>
									<tbody>
										<?php while($row = mysqli_fetch_assoc($result)) :?>
										<tr>
											<td><?php echo $row['id']; ?></td>
											<td><?php echo $row['books_name']; ?></td>
											<td><?php echo $row['books_author_name']; ?></td>
											<td><?php echo $row['books_publication_name']; ?></td>
											<td><?php echo $row['books_purchase_date']; ?></td>
											<td><?php echo $row['books_price']; ?></td>
											<td><?php echo $row['books_qty']; ?></td>
											<td><?php echo $row['available_qty']; ?></td>
											<td><?php echo $row['books_qty']; ?></td>
											<td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete Books</a></td>
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