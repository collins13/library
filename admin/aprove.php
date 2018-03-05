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
include '../connect/connect.php';
$id = $_GET['id'];

$sql = "UPDATE student SET status='yes' WHERE id='$id'";
$result_a = $conn->query($sql);
?>
<script type="text/javascript">
	window.location="student_display.php";
</script>
?>