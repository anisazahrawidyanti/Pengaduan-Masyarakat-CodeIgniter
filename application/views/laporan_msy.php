<h3></i>Data Pengaduan</h3><hr>
            <table class="table table-bordered ">
                <thead>
                    <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Isi Laporan</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2020-07-28</td>
                        <td>0002</td>
                        <td>Saya melaporkan</td>
                        <td>ss.jpg</td>
                        <td>0</td>
                        <td class="text-center">
                            <a href="<?php echo site_url('Dashboard/detail_pengaduan_msy') ?>" class="btn btn-info btn-icon-split">
                                <span class="icon text-white-50">
                                <i class="fas fa-info-circle"></i>
                                </span>
                                <span class="text">Detail</span>
                            </a>
                            <a href="<?php echo site_url('Dashboard/lihat_tanggapan_msy') ?>" class="btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                                </span>
                                <span class="text">Lihat Tanggapan</span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
