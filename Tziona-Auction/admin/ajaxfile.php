<?php
include '../includes/database.php';

$userid = $_POST['userid'];

$sql = "select * from messages where id=".$userid;
$result = mysqli_query($dbconnect,$sql);
while( $row = mysqli_fetch_array($result) ){
?>
<table border='0' width='100%'>
<tr>

    <p><?php echo $row['message']; ?></p>
    </td>
</tr>
</table>

<?php } ?>