<?php
require('config.php');

	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['judul']) || empty($_POST['deskripsi']) || empty($_POST['penerbit'])|| empty($_POST['penulis']) || empty($_POST['jumlah']))
		{
			$msg[]="Please full fill all requirement";
		}
		if(!(is_numeric($_POST['jumlah'])))
		{
			$msg[]="Jumlah harus diisi dengan angka...";
		}
        
		if(empty($_FILES['path_gambar']['name']))
		$msg[] = "Please provide a file";
	
		if($_FILES['path_gambar']['error']>0)
		$msg[] = "Error uploading file";
		
				
		if(!(strtoupper(substr($_FILES['path_gambar']['name'],-4))==".JPG" || strtoupper(substr($_FILES['path_gambar']['name'],-5))==".JPEG"|| strtoupper(substr($_FILES['path_gambar']['name'],-4))==".GIF"))
			$msg[] = "wrong file  type";
			
		if(file_exists("../upload_image/".$_FILES['path_gambar']['name']))
			$msg[] = "File already uploaded. Please do not updated with same name";
		
		if(empty($_FILES['ebook']['name']))
		$msg[] = "Please provide a document file";
	
		if($_FILES['ebook']['error']>0)
		$msg[] = "Error uploading document file";
		
		
		if(!(strtoupper(substr($_FILES['ebook']['name'],-4))==".PDF" || strtoupper(substr($_FILES['ebook']['name'],-4))==".PPT" ||strtoupper(substr($_FILES['ebook']['name'],-5))==".PPTX" ||  strtoupper(substr($_FILES['ebook']['name'],-4))==".DOC"|| strtoupper(substr($_FILES['ebook']['name'],-4))==".TXT"|| strtoupper(substr($_FILES['ebook']['name'],-5))==".DOCX"))
			$msg[] = "wrong document file  type";
			
		if(file_exists("../upload_ebook/".$_FILES['ebook']['name']))
			$msg[] = "Document File already uploaded. Please do not updated with same name";
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			move_uploaded_file($_FILES['path_gambar']['tmp_name'],"../upload_image/".$_FILES['path_gambar']['name']);
			$path_gambar = "upload_image/".$_FILES['path_gambar']['name'];	
			
			move_uploaded_file($_FILES['ebook']['tmp_name'],"../upload_ebook/".$_FILES['ebook']['name']);
			$b_pdf = "upload_ebook/".$_FILES['ebook']['name'];	
		
			$judul=$_POST['judul'];
			$b_kat=$_POST['kat'];
			$deskripsi=$_POST['description'];
			$penerbit=$_POST['penerbit'];
			$penulis=$_POST['penulis'];			
			$jumlah=$_POST['jumlah'];
			
			
		
			
			$query="insert into buku(judul,b_subcat,deskripsi,penerbit,penulis,jumlah,path_gambar,b_pdf)
			values('$judul','$b_kat','$deskripsi','$penerbit','$penulis','$jumlah','$path_gambar','$b_pdf')";
			
			mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
			header("location:tambah_buku.php");
		
		}
	}
	else
	{
		header("location:index.php");
	}
?>