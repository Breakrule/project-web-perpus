<!DOCTYPE html>

<html>

<head>
    <title>FAKE LIBRARY LOGIN</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="icon" href="assets/image/logook.png">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            background-image: url(assets/image/bg1.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-color: #999;
        }

        div,
        body {
            margin: 0;
            padding: 0;
            font-family: exo, sans-serif;
        }

        .wrapper {
            height: 100%;
            width: 100%;
        }

        .message {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            width: 100%;
            height: 45%;
            bottom: 0;
            display: block;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.6);
            color: #fff;
            padding: 0.5em;
        }
        h1 {
            text-align: center;
            font-weight: bold;
            color: yellow;
        }

    </style>
</head>

<body>

    <!--Cek Session-->

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
                <a class="navbar-brand" href="#">FAKE LIBRARY</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="contact.html">Kontak Kami</a></li>
                    <li><a href="aboutus.php">Tentang Kami</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Aksi</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Drama</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Romantis</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Programming</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Umum</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- menu login -->
                    <li><a href="login.php" data-toggle="modal" data-target="#"><b>Login</b></a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- body text-->
    <div class="container">
        <marquee><h1>SELAMAT DATANG DI FAKE LIBRARY</h1></marquee>
    </div>
    <!-- Modal -->
    <!--
        <div id="modallogout" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">
                        <!-- form login
                        <form action="logout.php" method="post">
                            <div class="form-group">
                                <label for="nama_pengguna">Username</label>
                                <input type="text" name="nama_pengguna" placeholder="Username" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="kata_kunci">Password</label>
                                <input type="text" name="kata_kunci" placeholder="Password" class="form-control" />
                            </div>
                            <div class="text-right">
                                <button class="btn btn-danger" type="submit">Logout</button>
                            </div>
                        </form>
                        <!-- end form login
                    </div>
                </div>
                <!-- /.modal-content
            </div>
            <!-- /.modal-dialog
        </div>
        <!-- /.modal -->
<div class="card-footer text-muted">
    <small> ©Kelompok7- DPW B - Informatika IT Telkom PWT</small>
</div>


    <script src="assets/js/jquery-3.2.1.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
