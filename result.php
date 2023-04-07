<?php
session_start();
require 'dbcon.php';

if($_REQUEST['track']){
$mobile = $_POST['mobile'];

if(empty($mobile)){
	$make = '<h4>You must type a word to search!</h4>';
}else{
	$make = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM forms WHERE mobile LIKE '%$mobile%'";
	$result = mysqli_query($con,$sele);
	
	if($row = mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
		echo '<h4> Id						: '.$row['id'];
		echo '<br> fullname						: '.$row['fullname'];
		echo '<br> mobile						: '.$row['mobile'];
		echo '<br> remark						: '.$row['remark'];
		echo '<br> status						: '.$row['status'];
		echo '</h4>';
	}
}else{
echo'<h2> Search Result</h2>';

print ($make);
}
mysqli_free_result($result);
mysqli_close($con);
}
}

?>
