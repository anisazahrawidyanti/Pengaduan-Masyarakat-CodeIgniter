<h3></i>Detail Pengaduan</h3><hr>
    <form class="ml-3 mr-3">
        <a href="<?php echo site_url('Dashboard/laporan_msy') ?>" class="btn btn-secondary">Kembali</a>
        <div class="form-group mt-3">
            <label for="exampleInput">Tanggal Pengaduan</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="2020-07-28" disabled>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Isi Laporan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Saya melaporkan" disabled></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Bukti Foto</label>
            <br>
            <img src="<?php echo base_url().'assets/img/ss.jpg' ?>" width="20%" alt="">
        </div>
    </form>
