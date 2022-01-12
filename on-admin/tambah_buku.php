<?php session_start();
require('config.php');
?>

<!DOCTYPE html>

<html>

<head>
    <title>Tambah Koleksi Buku</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <script type="text/javascript" src="../assets/js_bootstrap_4/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="../assets/js_bootstrap_4/bootstrap.js"></script>
    <script type="text/javascript" src="../assets/js/ajax.js"></script>
    <link rel="icon" href="../assets/image/find_user.png">
    <style>
        footer {
            color: white;
        }

        body {
            background-image: url(../assets/image/bg2.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-color: #999;
        }
        h4 {
            padding-top: 24px;
        }

        .bs-dark.navbar-inverse {
            background-color: #CCEEFF;
            border-color: #080808;
        }

        .bs-dark .navbar-img {
            padding: 5px 6px !important;
        }

        .bs-dark .navbar-img img {
            width: 40px;
        }

        .bs-dark .dropdown-menu {
            min-width: 200px;
            padding: 5px 0;
            margin: 2px 0 0;
            background-color: #000;
            border: 1px solid rgba(0, 0, 0, 0.7);
            border: 1px solid rgba(0, 0, 0, .15);
            -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
            box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        }

        .bs-dark .dropdown-menu .divider {
            border: 1px solid rgba(0, 0, 0, 0.8);
        }

        .bs-dark .dropdown-menu>li>a {
            padding: 6px 20px;
            color: rgba(255, 255, 255, 0.80);
        }

        .bs-dark .dropdown-menu>li>a:hover,
        .bs-dark .dropdown-menu>li>a:focus {
            color: rgba(255, 255, 255, 0.70);
            text-decoration: none;
            background-color: transparent;
        }

        .bs-dark .dropdown-menu>.active>a,
        .bs-dark .dropdown-menu>.active>a:hover,
        .bs-dark .dropdown-menu>.active>a:focus {
            color: rgba(255, 255, 255, 0.70);
            text-decoration: none;
            background-color: transparent;
            outline: 0;
        }

        .bs-dark .navbar-form {
            margin: 0;
            margin-top: 5px;
            padding: 8px 0px;
        }

        .bs-dark .navbar-form .search-box {
            border: 0px;
            height: 35px;
            outline: none;
            width: 320px;
            padding-right: 3px;
            padding-left: 15px;
            margin: 4px;
            -webkit-border-radius: 22px;
            -moz-border-radius: 22px;
            border-radius: 22px;
        }

        .bs-dark .navbar-form button {
            border: 0;
            background: none;
            padding: 2px 5px;
            margin-top: 2px;
            position: relative;
            left: -34px;
            margin-bottom: 0;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }

        .bs-dark .search-box:focus+button {
            z-index: 3;
        }

        @media (min-width: 768px) {
            .bs-dark .dropdown:hover {
                background-color: navy;
            }
            .bs-dark .dropdown:hover .dropdown-menu {
                display: block;
            }
            .bs-dark .navbar-form {
                padding: 0px;
            }
            .bs-dark .navbar-form .search-box {
                width: 260px;
                height: 32px;
            }

    </style>
</head>

<body class="bg-default" style="height: 100%;">
    <!-- Navbar -->
    <nav class="navbar navbar-default navbar-inverse" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                <a class="navbar-brand" href="index.php">LIST BUKU</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">Edit Buku</a></li>
                    <li><a href="#">Daftar Peminjaman</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- menu login -->
                    <li><a href="../logout.php" data-toggle="modal" data-target="#"><b>Logout</b></a></li>
                </ul>
            </div>
            <!-- start header -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col">

                    </div>
                    <div class="col">
                        <div class="card" style="margin-top:1rem;margin-bottom:1rem">
                            <div class="card-body bg-info text-black">
                                <div class="text-center">
                                    <h4 class="card-title text-white">TAMBAH BUKU BARU</h4>
                                </div><br>
                                <!-- start page -->
                                <div id="page">
                                    <!-- start content -->
                                    <div id="content">
                                        <div class="post" style="margin-left:100px">
                                            <div class="entry">
                                                <form action='proses_tambah_buku.php' method='POST' enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <br><b>Judul:</b><br>
                                                        <input type='text' name='judul' size='40'>
                                                        <br><br>
                                                    </div>
                                                    <div class="form-group">
                                                        <b>Kategori:</b><br>
                                                        <select name="kat">
								<?php
									
								$query="select * from kategori ";
			
								$res=mysqli_query($conn,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
												echo "<option disabled>".$row['kat_nm'];
												
												$q2 = "select * from subkat where parent_id = ".$row['kat_id'];
												
												$res2 = mysqli_query($conn,$q2) or die("Can't Execute Query..");
												while($row2 = mysqli_fetch_assoc($res2))
												{	
												
										echo '<option value="'.$row2['subkat_id'].'"> ---> '.$row2['subkat_nm'];
												
													
												}
												
											}
								?>
						</select>
                                                    </div><br><br>
                                                    <div class="form-group">
                                                        <b>Deskripsi:</b><br>
                                                        <textarea cols="40" rows="6" name='deskripsi'></textarea>
                                                        <br><br>
                                                    </div>
                                                    <div class="form-group">
                                                        <b>Penerbit:</b><br>
                                                        <input type='text' name='penerbit' size='40'>
                                                        <br><br>
                                                    </div>
                                                    <div class="form-group">
                                                        <b>Penulis:</b><br>
                                                        <input type='text' name='penulis' size='40'>
                                                        <br><br>
                                                    </div>
                                                    <div class="form-group">
                                                        <b>Jumlah:</b><br>
                                                        <input type='text' name='jumlah' size='40'>
                                                        <br><br>
                                                    </div>
                                                    <div class="form-group">
                                                        <b>Image:</b><br>
                                                        <input type='file' name='path_gambar' size='35'>
                                                        <br><br>
                                                    </div>
                                                    <div class="form-group">
                                                        <b>E-Book:</b><br>
                                                        <input type='file' name='ebook' size='35'>
                                                        <br><br>
                                                    </div>
                                                    <input type='submit' value='   OK   '>
                                                </form>
                                            </div>
                                            <div class="card-footer text-muted">
                                                <footer>
                                                    DPW_B_07 & Institut TELKOM Purwokerto
                                                </footer>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col">

                            </div>
                        </div>

                        <!-- end content -->
                    </div>
                </div>
            </div>
</body>

</html>
