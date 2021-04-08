<!DOCTYPE html>
<html lang="en">

<?php
include 'koneksi.php';

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="text-center">
                <h5>NILAI KINERJA ORGANISASI</h5>
                <h5>DIREKTORAT JENDERAL PAJAK</h5>
                <h5>KANWIL DJP SULAWESI SELATAN, BARAT DAN TENGGARA</h5>
                <h5>KPP PRATAMA MAROS</h5>
                <h5>PERIODE PELAPORAN : SD TRIWULAN 4 </h5>
            </div>
        </div>
        <table class="table table-bordered">
            <thead class="table-info">
                <th>Kode SS/IKU</th>
                <th>Sasaran Strategis / Indikator Kinerja Utama</th>
                <th>Target</th>
                <th>Realisasi</th>
                <th>Polarisasi</th>
                <th>V/C</th>
                <th>Bobot IKU</th>
                <th>Bobot Tertimbang</th>
                <th>Index Capaian</th>
            </thead>
            <tbody>
                <tr>
                    <td colspan="7" class="table-dark">Stakeholder Prespective</td>
                    <td class="table-dark text-center">25%</td>
                    <td class="table-danger text-center">%</td>
                </tr>
                <?php
					$no_urut = 0;
					$query="SELECT *
					FROM kode_ss where ss='1'
					";
					$perintah=mysqli_query($koneksi, $query);
					while($data=mysqli_fetch_row($perintah))
			{		$no_urut++;
				echo
				"<tr> 
						<td>".($data[1])."</td>
						<td>".($data[2])."</td>
						<td>".($data[3])." %</td>
				</tr>";}
				?>
                <?php
					$no_urut = 1;
					$query="SELECT *
					FROM master_iku where ss='1'
					";
					$perintah=mysqli_query($koneksi, $query);
					while($data=mysqli_fetch_row($perintah))
			{		$no_urut++;
				echo
				"<tr> 
						<td>".($data[2])."</td>
						<td>".($data[3])."</td>
						<td>".($data[4])." %</td>
                        <td>".($data[5])." %</td>
						<td>".($data[6])."</td>
						<td>".($data[7])."</td>
                        <td>".($data[8])." %</td>
                        <td>".($data[9])." %</td>
                        <td>".(number_format(($data[5]/$data[4])*100,2))." %</td>
				</tr>";}
				?>
                <tr>
                    <td colspan="7" class="table-dark">Customer Prespective</td>
                    <td class="table-dark text-center">15%</td>
                    <td class="table-danger text-center">%</td>
                </tr>
                <tr>
                    <td class="text-center">1a-CP</td>
                    <td>Persentase Realisasi Penerimaan Pajak</td>
                    <td class="text-center">15%</td>
                    <td class="text-center"></td>
                    <td class="text-center">max</td>
                    <td class="text-center">E/M</td>
                    <td class="text-center">21%</td>
                    <td class="text-center">60%</td>
                    <td class="table-warning text-center"></td>
                </tr>
                <tr>
                    <td class="text-center">1b-N</td>
                    <td>Persentase Realisasi Pertumbuhan Penerimaan Pajak Bruto</td>
                    <td class="text-center">100%</td>
                    <td class="text-center"></td>
                    <td class="text-center">max</td>
                    <td class="text-center">P/M</td>
                    <td class="text-center">14%</td>
                    <td class="text-center">40%</td>
                    <td class="table-warning text-center"></td>
                </tr>

                <tr>
                    <td class="table-active text-center">2</td>
                    <td class="table-active">Kepatuhan Tahun Berjalan Yang Tinggi</td>
                    <td class="table-active" colspan="6"></td>
                    <td class="table-danger text-center"></td>
                </tr>
                <tr>
                    <td class="text-center">2a-CP</td>
                    <td>Persentase Capaian Tingkat Kepatuhan Penyampaian SPT Tahunan PPh Wajib Pajak Badan dan Orang Pribadi</td>
                    <td class="text-center">50%</td>
                    <td class="text-center"></td>
                    <td class="text-center">max</td>
                    <td class="text-center">P/M</td>
                    <td class="text-center">14%</td>
                    <td class="text-center">50%</td>
                    <td class="table-warning text-center"></td>
                </tr>
                <tr>
                    <td class="text-center">2b-CP</td>
                    <td>Persentase Realisasi Penerimaan Pajak dari Kegiatan Pengawasan Pembayaran Masa (PPM)</td>
                    <td class="text-center">15%</td>
                    <td class="text-center"></td>
                    <td class="text-center">max</td>
                    <td class="text-center">P/M</td>
                    <td class="text-center">14%</td>
                    <td class="text-center">50%</td>
                    <td class="table-warning text-center"></td>
                </tr>
                <tr>
                    <td class="table-active text-center">3</td>
                    <td class="table-active">Kepatuhan Tahun Sebelumnya Yang Tinggi</td>
                    <td class="table-active" colspan="6"></td>
                    <td class="table-danger text-center"></td>
                </tr>
                <tr>
                    <td class="text-center">3a-CP</td>
                    <td>Persentase Realisasi Penerimaan Pajak dari Kegiatan Pengawasan Kepatuhan material (PKM)</td>
                    <td class="text-center">15%</td>
                    <td class="text-center"></td>
                    <td class="text-center">max</td>
                    <td class="text-center">P/M</td>
                    <td class="text-center">14%</td>
                    <td class="text-center">50%</td>
                    <td class="table-warning text-center"></td>
                </tr>
                <tr>
                    <td colspan="7" class="table-dark">Internal Process Perspective</td>
                    <td class="table-dark text-center">30%</td>
                    <td class="table-danger text-center">%</td>
                </tr>
                <tr>
                    <td class="table-active text-center">4</td>
                    <td class="table-active">Edukasi dan Pelayanan yang Efektif</td>
                    <td class="table-active" colspan="6"></td>
                    <td class="table-danger text-center"></td>
                </tr>
                <tr>
                    <td class="text-center">4a-CP</td>
                    <td>Persentase Efektivitas Kegiatan Edukasi dan Penyuluhan</td>
                    <td class="text-center">-</td>
                    <td class="text-center"></td>
                    <td class="text-center">max</td>
                    <td class="text-center">P/M</td>
                    <td class="text-center">14%</td>
                    <td class="text-center">40%</td>
                    <td class="table-warning text-center"></td>
                </tr>
                <tr>
                    <td class="text-center">4b-N</td>
                    <td>Indeks Efektivitas Penyuluhan dan Pelayanan</td>
                    <td class="text-center">-</td>
                    <td class="text-center"></td>
                    <td class="text-center">max</td>
                    <td class="text-center">E/M</td>
                    <td class="text-center">21%</td>
                    <td class="text-center">60%</td>
                    <td class="table-warning text-center"></td>
                </tr>
                <tr>
                    <td class="table-active text-center">5</td>
                    <td class="table-active">Pengawasan Pembayaran Masa yang Efektif</td>
                    <td class="table-active" colspan="6"></td>
                    <td class="table-danger text-center"></td>
                </tr>
                <tr>
                    <td class="text-center">5a-CP</td>
                    <td>Persentase Pembayaran Masa yang Efektif</td>
                    <td class="text-center">90%</td>
                    <td class="text-center"></td>
                    <td class="text-center">max</td>
                    <td class="text-center">P/M</td>
                    <td class="text-center">14%</td>
                    <td class="text-center">100%</td>
                    <td class="table-warning text-center"></td>
                </tr>
                <tr>
                    <td class="table-active text-center">6</td>
                    <td class="table-active">Pengawasan Kepatuhan Material yang Efektif</td>
                    <td class="table-active" colspan="6"></td>
                    <td class="table-danger text-center"></td>
                </tr>
                <tr>
                    <td class="text-center">6a-CP</td>
                    <td>Persentase Penyelesaian Permintaan Penjelasan atas Data dan/atau Keterangan WP Strategis</td>
                    <td class="text-center">15%</td>
                    <td class="text-center"></td>
                    <td class="text-center">max</td>
                    <td class="text-center">P/M</td>
                    <td class="text-center">14%</td>
                    <td class="text-center">35.90%</td>
                    <td class="table-warning text-center"></td>
                </tr>
                <tr>
                    <td class="text-center">6b-CP</td>
                    <td>Persentase Penyelesaian Permintaan Penjelasan atas Data dan/atau Keterangan WP Lainnya (Berbasis Kewilayahan)</td>
                    <td class="text-center">15%</td>
                    <td class="text-center"></td>
                    <td class="text-center">max</td>
                    <td class="text-center">P/M</td>
                    <td class="text-center">14%</td>
                    <td class="text-center">35.90%</td>
                    <td class="table-warning text-center"></td>
                </tr>
                <tr>
                    <td class="text-center">6c-N</td>
                    <td>Persentase Penyampaian IDLP</td>
                    <td class="text-center">25%</td>
                    <td class="text-center"></td>
                    <td class="text-center">max</td>
                    <td class="text-center">P/H</td>
                    <td class="text-center">11%</td>
                    <td class="text-center">100%</td>
                    <td class="table-warning text-center"></td>
                </tr>
                <tr>
                    <td class="table-active text-center">7</td>
                    <td class="table-active">Penegakan Hukum yang Efektif</td>
                    <td class="table-active" colspan="6"></td>
                    <td class="table-danger text-center"></td>
                </tr>
                <tr>
                    <td class="text-center">7a-CP</td>
                    <td>Persentase Nilai Ketetapan Dibayar Pada Tahun Berjalan</td>
                    <td class="text-center">37.50%</td>
                    <td class="text-center"></td>
                    <td class="text-center">max</td>
                    <td class="text-center">P/M</td>
                    <td class="text-center">14%</td>
                    <td class="text-center">33.33%</td>
                    <td class="table-warning text-center"></td>
                </tr>
                <tr>
                    <td class="text-center">7b-CP</td>
                    <td>Efektivitas Penagihan</td>
                    <td class="text-center">15%</td>
                    <td class="text-center"></td>
                    <td class="text-center">max</td>
                    <td class="text-center">P/M</td>
                    <td class="text-center">14%</td>
                    <td class="text-center">33.33%</td>
                    <td class="table-warning text-center"></td>
                </tr>
                <tr>
                    <td class="text-center">7c-N</td>
                    <td>Tingkat Efektivitas Pemeriksaan</td>
                    <td class="text-center">80%</td>
                    <td class="text-center"></td>
                    <td class="text-center">max</td>
                    <td class="text-center">P/M</td>
                    <td class="text-center">14%</td>
                    <td class="text-center">33.33%</td>
                    <td class="table-warning text-center"></td>
                </tr>
                <tr>
                    <td class="table-active text-center">8</td>
                    <td class="table-active">Data dan Informasi yang Berkualitas</td>
                    <td class="table-active" colspan="6"></td>
                    <td class="table-danger text-center"></td>
                </tr>
                <tr>
                    <td class="text-center">8a-CP</td>
                    <td>Persentase Penyediaan Data Potensi Perpajakan</td>
                    <td class="text-center">20%</td>
                    <td class="text-center"></td>
                    <td class="text-center">max</td>
                    <td class="text-center">P/M</td>
                    <td class="text-center">14%</td>
                    <td class="text-center">100%</td>
                    <td class="table-warning text-center"></td>
                </tr>
                <tr>
                    <td colspan="7" class="table-dark">Learning & Growth Perspective</td>
                    <td class="table-dark text-center">30%</td>
                    <td class="table-danger text-center">%</td>
                </tr>
                <tr>
                    <td class="table-active text-center">9</td>
                    <td class="table-active">SDM Yang Kompeten</td>
                    <td class="table-active" colspan="6"></td>
                    <td class="table-danger text-center"></td>
                </tr>
                <tr>
                    <td class="text-center">9-N</td>
                    <td>Persentase Pegawai yang Memenuhi Standar Kompetensi</td>
                    <td class="text-center">-</td>
                    <td class="text-center"></td>
                    <td class="text-center">max</td>
                    <td class="text-center">P/M</td>
                    <td class="text-center">14%</td>
                    <td class="text-center">100%</td>
                    <td class="table-warning text-center"></td>
                </tr>
                <tr>
                    <td class="table-active text-center">10</td>
                    <td class="table-active">Organisasi yang Berkinerja Tinggi</td>
                    <td class="table-active" colspan="6"></td>
                    <td class="table-danger text-center"></td>
                </tr>
                <tr>
                    <td class="text-center">10a-N</td>
                    <td>Persentase Efektivitas Dialog Kinerja Organisasi dan Rencana Mitigasi Risiko yang Selesai Dijalankan</td>
                    <td class="text-center">55%</td>
                    <td class="text-center"></td>
                    <td class="text-center">max</td>
                    <td class="text-center">P/H</td>
                    <td class="text-center">11%</td>
                    <td class="text-center">55%</td>
                    <td class="table-warning text-center"></td>
                </tr>               
                <tr>
                    <td class="text-center">10b-N</td>
                    <td>Indeks Penilaian Integritas Unit</td>
                    <td class="text-center">-</td>
                    <td class="text-center"></td>
                    <td class="text-center">max</td>
                    <td class="text-center">P/H</td>
                    <td class="text-center">11%</td>
                    <td class="text-center">41.18%</td>
                    <td class="table-warning text-center"></td>
                </tr>
                <tr>
                    <td class="text-center">10c-N</td>
                    <td>Indeks Efektivitas Pelaksanaan FGD Pejabat Administrator</td>
                    <td class="text-center">90%</td>
                    <td class="text-center"></td>
                    <td class="text-center">max</td>
                    <td class="text-center">A/M</td>
                    <td class="text-center">9%</td>
                    <td class="text-center">45%</td>
                    <td class="table-warning text-center"></td>
                </tr>
                <tr>
                    <td class="table-active text-center">11</td>
                    <td class="table-active">Pengelolaan Keuangan yang Optimal</td>
                    <td class="table-active" colspan="6"></td>
                    <td class="table-danger text-center"></td>
                </tr>
                <tr>
                    <td class="text-center">11a-CP</td>
                    <td>Persentase Kualitas Pelaksanaan Anggaran</td>
                    <td class="text-center">9.55%</td>
                    <td class="text-center"></td>
                    <td class="text-center">max</td>
                    <td class="text-center">P/M</td>
                    <td class="text-center">14%</td>
                    <td class="text-center">100%</td>
                    <td class="table-warning text-center"></td>
                </tr>
                <tr>
                    <td colspan="8" class="table-dark">Nilai Kinerja Organisasi</td>
                    <td class="table-danger text-center">%</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
</script>

</html>