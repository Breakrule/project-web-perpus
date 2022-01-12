<?php 
session_start();
session_destroy(); // hapus session yang tersimpan

header('location:login.php'); // kembali kehome
exit();