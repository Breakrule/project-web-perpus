<?php
session_start();
echo 'Selamat Datang, <h1>' . $_SESSION['namaLog'] . '</h1>';

echo '<a href="logout.php">logout</a>';