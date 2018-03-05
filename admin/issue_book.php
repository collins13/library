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
							<form action="issue_book.php" method="POST"">
								<table class="table">
								<tr>
									<td>
										<select class="form-control" selectpicker name="reg_no">
											<?php $sql = "SELECT reg_no FROM student";  
                                                  $result = $conn->query($sql);
											 ?>
											 <?php while($row = mysqli_fetch_assoc($result)) : ?>
											<option><?php echo $row['reg_no']; ?></option>
                                           <?php endwhile; ?>
										</select>
										</select>
									</td>
									<td><input type="submit" name="submit" value="search" class="btn btn-success"></td>
								</tr>
							</table>
						</form>

						<form action="issue_book.php" method="POST"> 
						<?php if (isset($_POST['submit'])) {
							$sql3 = "SELECT * FROM student WHERE reg_no ='$_POST[reg_no]'";
							$result3 = $conn->query($sql3);

							while ($row3 = mysqli_fetch_assoc($result3)) :
								 $reg_no = $row3['reg_no'];
								 $f_name = $row3['f_name'];
								 $l_name = $row3['l_name'];
								 $contact = $row3['contact'];
								 $course = $row3['course'];
								 $year = $row3['year'];
								 $sem = $row3['sem'];
								 


	                ?>
	               
                <table class="table col-lg-6">
	                <tr>
		               <td><input type="text" name="reg_no" placeholder="Reg No" value="<?php echo $row3['reg_no']; ?>" class="form-control" style="width: 400px;" readonly=""></td>
		               <td><input type="text" name="f_name" placeholder=" Student Name" value="<?php echo $f_name.' '.$l_name; ?>" class="form-control" style="width: 400px;"></td>
		               
		               
	                </tr>
	               
	                 <tr>
		               <td><input type="text" name="contact" value="<?php echo $row3['contact'];  ?>" class="form-control" style="width: 400px;"></td>
		               <td><input type="text" name="course" placeholder="student course" value="<?=$row3['course']; ?>" class="form-control" style="width: 400px;"></td>
	                </tr>
	             
	                 <tr>
		               <td><input type="text" name="year" placeholder="student year" value="<?=$row3['year']; ?>" class="form-control" style="width: 400px;"></td>
		                <td><input type="text" name="sem" placeholder="semister" value="<?php echo $row3['sem']; ?>" class="form-control" style="width: 400px;"></td>
	                </tr>
	                 
	                 <tr>
		               <td>
		               	<select name="bookname" class="form-control selectpicker" style="width: 400px;">
		               			<?php 
		               	$sqla = "SELECT books_name FROM add_books";
		               	$resulta = $conn->query($sqla);
		               	?>
		               	<?php while($book = mysqli_fetch_assoc($resulta)) : ?>
		               	<option><?= $book['books_name']; ?></option>
		               <?php endwhile; ?>
		               		
		               	</select>
		               	 <td><input type="text" name="date" placeholder="issue date" value="<?php echo date('d/M/y'); ?>" class="form-control" style="width: 400px;"></td>
		               </td>
	                </tr>
	                <tr>
	                	<td><button type="submit2" name="submit2" class="btn btn-success">issue book</button></td>
	                </tr>
                </table>
            <?php endwhile; ?>
	<?php
   
} 

?>
</form>

<?php if (isset($_POST['submit2'])) {
	$reg_no = $_POST['reg_no'];
	$f_name = $_POST['f_name'];
	$contact = $_POST['contact'];
	$course = $_POST['course'];
	$year = $_POST['year'];
	$sem = $_POST['sem'];
	$bookname = $_POST['bookname'];
	$date = $_POST['date'];

    $qty = 0;
	$sql6 = "SELECT * FROM add_books";
	$result6 = $conn->query($sql6);
    
	while ($row6 = mysqli_fetch_assoc($result6)) {

		$qty=$row6['available_qty'];
		
	}
	if ($qty == 0 ) {
		echo "<div class='alert alert-danger'>The book is not available</div>";
		
	}else{
     

	$sql4 = "INSERT INTO issue_books(reg_no, student_name, student_contact, course, year, semister, book_name, issue_date) 
	VALUES('$reg_no', '$f_name', '$contact', '$course', '$year', '$sem', '$bookname', '$date')";
	$sql4 = "UPDATE add_books SET available_qty=available_qty-1 WHERE books_name='$bookname'";

	$result4 = $conn->query($sql4);

	header("Location:index.php");
     }
 }

?>

						</div>
						<div class="panel-footer"> &copy 2016</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>