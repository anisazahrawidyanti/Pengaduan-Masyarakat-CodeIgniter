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
    <style>
        .card{
            width: 1000px; 
            height: 420px; 
            position: absolute; 
            top: 50%; 
            left: 50%; 
            transform: translate(-50%, -50%);
        }
        .card-img{
            width: 100%;
            height: 420px;
        }
        input text{
            background: none;
            outline:none;
            border: none;
            color: white;
            font-size: 18px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
        <div class="card">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="<?php echo base_url().'assets/img/pengaduan.jpeg'; ?>" class="card-img" alt="...">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <?php 
                            if ($this->uri->segment(2) == "login_msy") {
                                $this->load->view('login_msy');
                            }
                            else if($this->uri->segment(2) == "login_adpet"){
                                $this->load->view('login_adpet');
                            } 
                            else if($this->uri->segment(2) == "registrasi_msy"){
                                $this->load->view('registrasi_msy');
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>