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
                                 $i = 0;
                                 $sql = "SELECT * FROM add_books";
                                 $result = $conn->query($sql);

							?>
							<table class="table table-bordered">
								<tr>
									<td>Book Name</td>
									<td>Avaialable qty</td>
									<td>Total Qty</td>
									<td>Student with this Book</td>
								</tr>
									<?php while($row = mysqli_fetch_assoc($result)) : 
                                      $i = $i+1;
                               		?>
                               <tr>
                               	<td><?=$row['books_name']; ?></td>
                               	<td><?=$row['available_qty']; ?></td>
                               	<td><?=$row['books_qty']; ?></td>
                               	<td><a href="record.php?book_name=<?=$row['books_name'];?>" class="btn btn-info"><i class="fa fa-edit">record</i></a></td>

                               	</tr>
                               		<?php
                                    if ($i == 5) {
                                    	?>
                                    	</tr>
                                    	<tr>
                                    		<?php
                                    }

                               	 endwhile; ?>
                               
                            </table>
						</div>
						<div class="panel-footer"> &copy 2016</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>