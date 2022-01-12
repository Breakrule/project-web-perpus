<?php
require('config.php');

			$query="delete from buku where id_buku =".$_GET['id_buku'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:index.php.php");

?>