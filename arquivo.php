<?php
	$link = mysqli_connect("localhost", "root", "");
	if (!$link) {
		echo "erro de conexão \n";
	}else {
		echo "conexão bem sucedida \n";
		mysqli_close($link);
	}

