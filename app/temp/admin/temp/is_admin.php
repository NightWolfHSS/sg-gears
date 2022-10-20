<?php 
/*
* security adm
*/
function get_user()
{
	$sql = "SELECT * FROM adm";
	$result  = get_connect()->query($sql);
	$stmt = $result->fetch_assoc();	
	return $stmt;
}

/*check validate and verification*/
if ( 
	!empty($_POST['name'])
	&&
	!empty($_POST['password']) 
) {
	if (
		$_POST['name'] == get_user()['login']
		&&
		md5($_POST['password']) == get_user()['password']
	) {
		$_SESSION['sxfd'] = 'stmtfix';
		header('Location: http://sg-gears:8080/adm-home');
		exit();
	} else {
		header('Location: http://sg-gears:8080/redirect_ready');
		exit();
	}
} else {
	header('Location: http://sg-gears:8080/redirect_ready');
	exit();
}

