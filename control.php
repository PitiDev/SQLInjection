<?php

if (!empty($_GET['msg'])) {
    echo "";
}


if (!empty($_REQUEST['uid'])) {

$username = ($_REQUEST['uid']);
$pass = $_REQUEST['password'];

$q = "SELECT * FROM users where username='".$username."' AND password = '".md5($pass)."'" ;
//echo $q;
	if (!mysqli_query($con,$q))
	{
		die('Error: ' . mysqli_error($con));
	}
	
	$result = mysqli_query($con,$q);
	$row_cnt = mysqli_num_rows($result);

	if ($row_cnt > 0) {
	
	$row = mysqli_fetch_array($result);
	
	if ($row){
	//$_SESSION["id"] = $row[0];
	$_SESSION["username"] = $row[1];
	$_SESSION["name"] = $row[3];
	//ob_clean();
	
	header('Location:home.php');
	}
}
	else{
		echo "<font style=\"color:#FF0000;size:15px;\"><br \><h1>ຂໍອາໄພ Username OR Password ຂອງທ່ານບໍ່ຖືກຕ້ອງ!</h1></font\>";
		
	}
}

?>