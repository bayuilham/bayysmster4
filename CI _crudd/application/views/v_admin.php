<!DOCTYPE html>
<html>
<head>
	<title>Membuat login dengan codeigniter | www.malasngoding.com</title>
</head>
<body>
	<h1>Login berhasil !</h1>
	<h2>Hai, <?php
	/* session user */ echo $this->session->userdata("nama"); ?></h2>
	<a href="<?php /* mengalihkan ke halaman login atau logout */
	echo base_url('login/logout'); ?>">Logout</a>
</body>
</html>