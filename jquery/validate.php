<?php
	require_once('mio.php');
	$type = ( isset($_POST['type']) ) ? $_POST['type'] : $_GET['type'];
	$sql = "SELECT name FROM users WHERE name = '" . str_replace("\'", "''", $_GET['user_name']) . "'";
//	$sql = "SELECT name FROM users WHERE name = 'cooo'";
//	var_dump( $sql);
	if (!$mio){
		echo "資料庫連結失敗，請洽管理員" ;
	}
	$result = mysqli_query($mio, $sql);
	$num_res = mysqli_num_rows($result);
//	echo $num_res;

	if( $num_res > 0 ) {
		$ret = "<span style='color: red;'>此帳號".$_GET['user_name']."已經有人使用</span>";
	}
	else{
		$ret = "<span style='color: blue;'>此帳號可以使用</span>";
	}
	echo $ret;

?>
