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
				<li class="h4"><a href="returned_books.php" class="fa fa-table"> Returned Book</a></li>
			 </div>

			</div>
			<div class="col-md-10">
				<div class="panel panel-info">
					<div class="panel-heading">Dashbord</div>
						<div class="panel-body">
							<form action="returned_books.php" method="POST" class="col-md-6">
								<table>
									<tr>
										<td>
										<select name="reg_no" class="form-control">
											<?php 
											$sql1 = "SELECT reg_no FROM issue_books WHERE return_date=''";
											$result1 = $conn->query($sql1);

											 ?>
											 <?php while($row1 =  mysqli_fetch_assoc($result1)) : ?>
											<option><?= $row1['reg_no']; ?></option>

										<?php endwhile; ?>
											
										</select>
									</td>
									
									<td><input type="submit" name="submit" value="search" class="btn btn-success" style="margin-left: 10px;"></td>
								</tr>
								</table>
							</form>
							<?php
							if (isset($_POST['submit'])) {
								$sql2 = "SELECT * FROM issue_books WHERE reg_no='$_POST[reg_no]'";
								$result2 = $conn->query($sql2);

								?>
								<table class="table table-striped">
									<tr>
									<th>reg_no</th>
                                	<th>course</th>
                                	<th>year</th>
                                	<th>sem </th>
                                	<th>book name</th>
                                	<th>date issued</th>
                                	<th>returned book</th>
									</tr>
									<?php while($row2 = mysqli_fetch_assoc($result2)) : ?>
									<tr>
									<th><?=$row2['reg_no']; ?></th>
                                	<th><?=$row2['course']; ?></th>
                                	<th><?=$row2['year']; ?></th>
                                	<th><?=$row2['semister'] ?></th>
                                	<th><?=$row2['book_name'] ?></th>
                                	<th><?=$row2['issue_date'] ?></th>
                                	<td><a href="return.php?id=<?=$row2['id']; ?>">returned book</a></td>
                                    </tr>
                                     <?php endwhile; ?>

								</table>


								<?php


                                 }
                              ?>
						</div>
						<div class="panel-footer"> &copy 2018</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>