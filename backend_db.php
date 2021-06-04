if (mysqli_connect_errno()) {
	$status = 'ERROR';
	$content = mysqli_connect_error();
}


