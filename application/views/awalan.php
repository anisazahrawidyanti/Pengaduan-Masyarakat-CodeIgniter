<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body class="bg-light" style="overflow: hidden">
    <div class="wrapper">
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><h3>SISTEM PENGADUAN MASYARAKAT</h3></a>
            <a class="navbar-brand" href="#" style="margin-left: 590px">Beranda</a>
            <a href="<?php echo site_url('Dashboard/registrasi_msy') ?>"><button type="submit" class="btn btn-primary mr-2">Mulai Mendaftar</button></a>
            
        </nav>
        <div class="row mt-5">
            <div class="col-md-6 mt-5">
                <center>
                    <img src="<?php echo base_url().'assets/img/pengaduan-online.png' ?>" width="80%" alt="">
                </center>
                    
            </div>
            <div class="col-md-6 mt-5">
                <h1 class="text-center" style="font-family: Verdana; font-size: 37px; margin-top: 100px;">AJUKAN PENGADUAN SEKARANG <br> JADI LEBIH MUDAH</h1>
                <br>
                <center>
                    <a href="<?php echo site_url('Dashboard/login_msy') ?>"><button type="submit" class="btn btn-success">Mulai Mengadu</button></a>
                </center>        
            </div>
        </div>
    </div>
</body>
</html>