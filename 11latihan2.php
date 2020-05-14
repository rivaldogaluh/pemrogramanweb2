<?php
	$link = mysqli_connect("localhost","root","");
	
	$dbname="lat_dbase";

	$query = ("CREATE DATABASE $dbname") or die("Couldn't Create Database: $dbname");

	$cek = mysqli_query( $link, $query);
	
	if($cek){
	 echo "Database $dbname Berhasil dibuat";
	}
