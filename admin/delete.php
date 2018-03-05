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

<?php
include 'connect/connect.php'; 
if (isset($_GET['id'])) {

	$id = $_GET['id'];

$sql = "DELETE FROM add_books WHERE id='$id'";
$result = $conn->query($sql);

?>
<script type="text/javascript">
	window.location="index.php";
</script>
<?php
}else {
	?>
	<script type="text/javascript">
	window.location="index.php";
</script>
<?php
}

?>

