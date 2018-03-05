<?php include 'connect/connect.php'; ?>
<?php include 'includes/header.php';  ?>


<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
			  <div class="nav nav-pills nav-stacked">	
				<li class="active"><a href="#">categories</a></li>
				<li class="h3"><a href="index.php" class="fa fa-home"> Home</a></li>
				<li class="h3"><a href="issued_books.php" class="fa fa-desktop"> Issued Books</a></li>
				<li class="h3"><a href="select.php" class="fa fa-edit">categories</a></li>
			 </div>

			</div>
			<div class="col-md-10">
				<div class="panel panel-info">
					<div class="panel-heading">Dashbord</div>
						<div class="panel-body">
							<table class="table table-bordered">
                               <tr>
                               	<td>Book Name</td>
                               	<td>Total Copies</td>
                               	<td>Available Copies</td>
                               	<td>Student has the book</td>
                               </tr>
                            </table>
						</div>
						<div class="panel-footer"> &copy 2016</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>