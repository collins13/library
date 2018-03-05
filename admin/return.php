<?php
include 'connect/connect.php'; 
if (isset($_GET['id'])) {

	$id= $_GET['id'];

$a=date('d/M/y');
$sql = "UPDATE  issue_books SET return_date='$a' WHERE id='$id'";
$result = $conn->query($sql);

$books_name = "";

$sql = "SELECT * FROM issue_books WHERE id='$id'";
$result = $conn->query($sql);
while ($row = mysqli_fetch_assoc($result)) {
	$books_name = $row['book_name'];
}
$sql4 = "UPDATE add_books SET available_qty=available_qty+1 WHERE books_name='$books_name'";
	$result4 = $conn->query($sql4);

	
}else{
	?>
      <script type="text/javascript">
	window.location="returned_books.php";
</script>
	<?php
}

?>

