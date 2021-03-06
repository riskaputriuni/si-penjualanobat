<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Pembelian Obat</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail produk-->
        <?php
        include '../config/koneksi.php';
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Penjualan Obat Pada Apotek ABC </h2>
                        <h4>Jalan Besar Desa Mekar Sari, Kabupaten Asahan, Sumatera Utara, 21261</h4>
                        <hr>
                        <h3>DATA SELURUH PEMBELIAN PRODUK</h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                                <thead>
								<tr>
									<th>No.</th>
                                    <th width="18%">Jenis Pembelian</th>
                                    <th>Nama Pembeli</th>
                                    <th>Kode Obat</th>
                                    <th>Harga Beli</th>
                                    <th>Jumlah Pembelian</th>
                                    <th>Tanggal Pembelian</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tb_pembelian";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['jenis_pembelian'] ?></td>
									                  <td><?= $data['nama_pembeli'] ?></td>
                                    <td><?= $data['kode_obat'] ?></td>
                                    <td><?= $data['harga_beli'] ?></td>
                                    <td><?= $data['jumlah_pembelian'] ?></td>
                                    <td><?= $data['tanggal_pembelian'] ?></td>
                                    
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Mekar Sari  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kelompok 1<strong></u><br>
                                        Penjualan Obat Pada Apotek ABC
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
