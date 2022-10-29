<?php 
/*
* security adm
*/
function get_user()
{
	$sql = "SELECT * FROM admin_x";
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
		header('Location: https://zuborez.kz/adm-home');
		exit();
	} else {
		header('Location: https://zuborez.kz/redirect_ready');
		exit();
	}
} else {
	header('Location: https://zuborez.kz/redirect_ready');
	exit();
}

