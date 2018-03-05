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

<?php
include 'connect/connect.php'; 
  if (isset($_POST['submit'])) {

  	$books_name = $_POST['books_name'];
  	$books_author_name = $_POST['books_author_name'];
  	$books_publication_name = $_POST['books_publication_name'];
  	$books_purchase_date = $_POST['books_purchase_date'];
  	$books_price = $_POST['books_price'];
  	$books_qty = $_POST['books_qty'];
  	$available_qty = $_POST['available_qty'];
  	$librarian_name = $_POST['librarian_name'];

  	if (empty($books_name) || empty($books_author_name) || empty($books_publication_name) || empty($books_purchase_date) ||
  		empty($books_price) || empty($books_qty) || empty($available_qty) || empty($librarian_name)) {

  		echo "<div class='alert alert-danger'>All fields are required</div>";
  	}

        $sqlc = "SELECT * FROM add_books WHERE books_name ='$books_name'";
        $resultc = $conn->query($sqlc);
        $count = mysqli_num_rows($resultc);

        if ($count > 0) {
        	echo "<div class='alert alert-danger'>the book already availabel</div>";
        }else{

         $sql = "INSERT INTO add_books(books_name, books_author_name, books_publication_name, books_purchase_date, books_price, books_qty, available_qty, librarian_name) VALUES('$books_name', '$books_author_name', '$books_publication_name', '$books_purchase_date', '$books_price', '$books_qty', '$available_qty', '$librarian_name')";

  	$result = $conn->query($sql);
	}
	?>
	<script type="text/javascript">
		window.location="index.php";
	</script>
	<?php
      
  }
?>


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
					<div class="panel-heading h2">Add Books</div>
					<div class="clearfix"></div>
						<div class="panel-body">
                            <form action="add_book.php" method="POST" enctype="multipart/form-data">
                            	<table class="table">
                            		<tr>
                            			<td><input type="text" name="books_name" class="form-control col-lg-6" placeholder="Book Name"></td>
                            			<td><input type="file" name="image" placeholder="books Image" class="col-lg-6 form-control"></td>
                            		</tr>
                            		<tr>
                            			<td><input type="text" name="books_author_name" class="form-control col-lg-6" placeholder="Author name"></td>
                            			<td><input type="text" name="books_publication_name" class="form-control col-lg-6" placeholder="Publication Name"></td>
                            		</tr>
                            			<tr>
                            			<td><input type="text" name="books_purchase_date" class="form-control col-lg-6" placeholder="Purchase Date"></td>
                            			<td><input type="text" name="books_price" class="form-control col-lg-6" placeholder="Book Price"></td>
                            		</tr>
                            			<tr>
                            			<td><input type="text" name="books_qty" class="form-control col-lg-6" placeholder="Book Qty"></td>
                            			<td><input type="text" name="available_qty" class="form-control col-lg-6" placeholder="Available Qty"></td>
                            		</tr>
                            			<tr>
                            			<td><input type="text" name="librarian_name" class="form-control col-lg-6" placeholder="Librarian Name"></td>
                            			<td><input type="submit" name="submit" class="btn btn-success"  value="Add Book"></td>
                            		</tr>
                            	</table>
                            </form>
							
						</div>
						<div class="panel-footer"> &copy 2018</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>