<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style>
        .nav-link:hover {
            background-color: grey;
        }
        .display-4 {
            font-weight: bold;
        }
        .card-body-icon {
            position: absolute;
            z-index: 0;
            top: 25px;
            right: 10px;
            opacity: 0.4;
            font-size: 80px;
        }
    </style>
    <title><?php echo $title?></title>
</head>
<body>
    <div class="row">
        <div class="col-md-2">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #2980B9">
                <a class="navbar-brand text-white text-center" href="#"><b>APLIKASI LAPORAN PENGADUAN MASYARAKAT</b></a>
            </nav>
        </div>
    </div>

    <div class="row no-gutters mt-5">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item text-center">
                    <img src="<?php echo base_url().'assets/img/avatar.png' ?>" width="165px" class="rounded-circle" alt="">
                    <h5 class="text-white mt-3">(nama masyarakat)</h5>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" href="<?php echo site_url('Dashboard/dsb_msy'); ?>"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="bg-secondary"> 
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo site_url('Dashboard/tulis_pengaduan') ?>"><i class="fas fa-edit mr-2"></i> Tulis Pengaduan</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo site_url('Dashboard/laporan_msy') ?>"><i class="fas fa-search mr-2"></i> Lihat Laporan</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo site_url('Dashboard/login_msy') ?>"><i class="fas fa-sign-out-alt mr-2"></i> Logout</a><hr class="bg-secondary">
                </li>
            </ul>
        </div>
        <div class="col-md-10 p-4">
            <?php
                if($this->uri->segment(2) == "dsb_msy"){
                    $this->load->view('dsb_msy');
                } 
                else if($this->uri->segment(2) == "tulis_pengaduan"){
                    $this->load->view('tulis_pengaduan');
                }
                else if($this->uri->segment(2) == "laporan_msy"){
                    $this->load->view('laporan_msy');
                }
                else if($this->uri->segment(2) == "detail_pengaduan_msy"){
                    $this->load->view('detail_pengaduan_msy');
                } 
                else if($this->uri->segment(2) == "lihat_tanggapan_msy"){
                    $this->load->view('lihat_tanggapan_msy');
                }

            ?>

        </div>
    </div>

    <script type="text/javascript" src="index.js"></script>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</body>
</html>