<?php
    session_start();
	session_destroy();
	echo 'cerraste sesion';
	echo'<script>window.location="index.php"; </script>';
	
?>
<!DOCTYPE html>
<html>
	<head>
		
	</head>
	<body>
		<script language="JavaScript">location.href="index.php";</script>
	</body>
</html>