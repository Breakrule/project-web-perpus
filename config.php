<?php
/**
 * Nama File : Config.php
 * File Ini berisi beberapa data penting seperti
 * Data koneksi ke database
 * Secret Kode
 * dan data lain yang nantinya akan digunakan secara terus-menerus
 */

define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'perpus');

$koneksi = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

# Check koneksi, berhasil atau tidak
if ( $koneksi->connect_error ) {
   die( 'Oops!! Koneksi Gagal : '. $koneksi->connect_error );
}