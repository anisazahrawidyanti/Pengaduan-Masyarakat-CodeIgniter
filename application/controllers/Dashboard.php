<?php
    Class Dashboard extends CI_Controller{

        public function index(){
            $data['title'] = "index";
            $this->load->view('awalan', $data);
        }
        public function dsb_msy(){
            $data['title'] = "Dashboard";
            $this->load->view('base_msy', $data);
        }
        public function tulis_pengaduan(){
            $data['title'] = "Tempat Pengaduan";
            $this->load->view('base_msy', $data);
        }
        public function laporan_msy(){
            $data['title'] = "Data Pengaduan";
            $this->load->view('base_msy', $data);
        }
        public function detail_pengaduan_msy(){
            $data['title'] = "Detail Pengaduan";
            $this->load->view('base_msy', $data);
        }
        public function lihat_tanggapan_msy(){
            $data['title'] = "Lihat Tanggapan";
            $this->load->view('base_msy', $data);
        }
        public function login_msy(){
            $data['title'] = "Login Masyarakat";
            $this->load->view('base_loreg', $data);
        }
        public function login_adpet(){
            $data['title'] = "Login Admin & Petugas";
            $this->load->view('base_loreg', $data);
        }
        public function registrasi_msy(){
            $data['title'] = "Registrasi Masyarakat";
            $this->load->view('base_loreg', $data);
        }


    }
?>