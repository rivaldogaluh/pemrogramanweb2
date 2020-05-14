<?php
	// hostname or ip of server
	$host='localhost';
	// username and password
	$username='root';
	$password='';
	
	$link= mysqli_connect($host, $username, $password) or die (" Not able to connect to server ");
	$database = mysqli_select_db($link, 'database');

	if ($link){
		echo "ok....koneksi berhasil";
	}
