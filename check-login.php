<?php
session_start();
require 'config.php';
if ( isset($_POST['nama_pengguna']) && isset($_POST['kata_kunci']) ) {
    
    $sql_check = "SELECT peran, 
                         id_pengguna 
                  FROM pengguna 
                  WHERE 
                       nama_pengguna=? 
                       AND 
                       kata_kunci=? 
                  LIMIT 1";
    $check_log = $koneksi->prepare($sql_check);
    $check_log->bind_param('ss', $nama_pengguna, $kata_kunci);
    $nama_pengguna = $_POST['nama_pengguna'];
    $kata_kunci = md5( $_POST['kata_kunci'] );
    $check_log->execute();
    $check_log->store_result();
    if ( $check_log->num_rows == 1 ) {
        $check_log->bind_result($peran, $id_pengguna);
        while ( $check_log->fetch() ) {
            $_SESSION['user_login'] = $peran;
            $_SESSION['sess_id']    = $id_pengguna;
            
        }
        $check_log->close();
        header('location:on-'.$peran);
        exit();
    } else {
        header('location: login.php?error='.base64_encode('Username dan Password Invalid!!!'));
        exit();
    }
   
} else {
    header('location:login.php');
    exit();
}