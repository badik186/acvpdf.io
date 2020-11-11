<?php

// include autoloader
require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$pdf = new Dompdf();

//make the content here
//using output buffer
ob_start();
?>

<!-- Header -->
<div>
    <table class="section-header" width="100%">
        <tr>
            <td align="left" width="80%">
                <img src="dompdf/src/Image/ic_logo.png" style="width: 23%;">
            </td>
            <td style="text-align:left;" width="20%">
                <h3 style="line-height:6px; font-weight:5px; font-size:22px;">Hasil</h3>
                <h3 style="line-height:6px; font-size:22px">Inspeksi</h3>
            </td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <td>
                <img class="divider" src="dompdf/src/Image/vec_line.png">
            </td>
        </tr>
        <tr>    
            <td>
                <span class="title-date">Tanggal :</span>
                <span class="text-date">24/09/2020</span>
                <span class="title-date" style="margin-left:80px;">Lokasi :</span>
                <span class="text-date">6</span>
                <br>
                <br>
                <span class="title-date">Tanda Tangan :</span>
                <span class="text-date"></span>
            </td>
            <td>
                <img src="dompdf/src/Image/qrcode.png" style="width:10%; margin-left:15px;">
            </td> 
        </tr>
    </table>
</div>

<!-- Informasi Dasar Kendaraan -->
<div>
    <table class="section-title" width="100%">
        <tr>
            <td>
                <span style="margin-left:20px;">Informasi Dasar Kendaraan</span> 
            </td>
        </tr>
    </table>

    <div class="text-content">
        <table>
            <tr>
                <td>
                    <span style="margin-left:30px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">No. Polisi</span> 
                </td>
                <td>
                    <span style="margin-left:40px;">:</span> 
                </td>
                <td>
                    <span style="margin-left:5px; font-style: bold">B 1234 ASD</span> 
                </td>

                <td>
                    <span style="margin-left:100px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Transmisi</span> 
                </td>
                <td>
                    <span style="margin-left:40px;">:</span> 
                </td>
                <td>
                    <span style="margin-left:5px; font-style: bold">AT</span> 
                </td>
            </tr>
            <tr>
                <td>
                    <span style="margin-left:30px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Merek</span> 
                </td>
                <td>
                    <span style="margin-left:40px;">:</span> 
                </td>
                <td>
                    <span style="margin-left:5px; font-style: bold">HONDA</span> 
                </td>

                <td>
                    <span style="margin-left:100px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Tahun</span> 
                </td>
                <td>
                    <span style="margin-left:40px;">:</span> 
                </td>
                <td>
                    <span style="margin-left:5px; font-style: bold">2015</span> 
                </td>
            </tr>
            <tr>
                <td>
                    <span style="margin-left:30px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Seri</span> 
                </td>
                <td>
                    <span style="margin-left:40px;">:</span> 
                </td>
                <td>
                    <span style="margin-left:5px; font-style: bold">PCX</span> 
                </td>

                <td>
                    <span style="margin-left:100px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">No. Rangka</span> 
                </td>
                <td>
                    <span style="margin-left:40px;">:</span> 
                </td>
                <td>
                    <span style="margin-left:5px; font-style: bold">MFHZ28H36H0046186</span> 
                </td>
            </tr> 
            <tr>
                <td>
                    <span style="margin-left:30px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Tipe</span> 
                </td>
                <td>
                    <span style="margin-left:40px;">:</span> 
                </td>
                <td>
                    <span style="margin-left:5px; font-style: bold">ABS</span> 
                </td>

                <td>
                    <span style="margin-left:100px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Kilometer</span> 
                </td>
                <td>
                    <span style="margin-left:40px;">:</span> 
                </td>
                <td>
                    <span style="margin-left:5px; font-style: bold">8.412</span> 
                </td>
            </tr>
            <tr>
                <td>
                    <span style="margin-left:30px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">CC</span> 
                </td>
                <td>
                    <span style="margin-left:40px;">:</span> 
                </td>
                <td>
                    <span style="margin-left:5px; font-style: bold">150</span> 
                </td>

                <td>
                    <span style="margin-left:100px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Warna</span> 
                </td>
                <td>
                    <span style="margin-left:40px;">:</span> 
                </td>
                <td>
                    <span style="margin-left:5px; font-style: bold">Putih</span> 
                </td>
            </tr>
            <tr>
                <td>
                    <span style="margin-left:30px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Model</span> 
                </td>
                <td>
                    <span style="margin-left:40px;">:</span> 
                </td>
                <td>
                    <span style="margin-left:5px; font-style: bold">MATIC</span> 
                </td>

                <td>
                    <span style="margin-left:100px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">STNK / Tanggal STNK</span> 
                </td>
                <td>
                    <span style="margin-left:40px;">:</span> 
                </td>
                <td>
                    <span style="margin-left:5px; font-style: bold">Ada / 30/12/2021</span> 
                </td>
            </tr>
        </table>
    </div>
</div>

<!-- Kelengkapan Kondisi Komponen -->
<div>
    <table class="section-title" width="100%">
        <tr>
            <td>
                <span style="margin-left:20px;">Kelengkapan Kondisi Komponen</span> 
            </td>
        </tr>
    </table>

    <div class="text-content">
        <table width="100%">
            <tr>
                <td align="center">
                    Keterangan Kode:
                </td>
            </tr>
        </table>
        
        <table align="center">   
            <tr>
                <td>
                    <span class="subtitle-status-baik"></span>
                </td>
                <td>
                    <span>Baik</span>
                </td>

                <td>
                    <span class="subtitle-status-rusak" style="margin-left: 15px;"></span>
                </td>
                <td>
                    <span>Rusak</span>
                </td>

                <td>
                    <span class="subtitle-status-tidakada" style="margin-left: 15px;"></span>
                </td>
                <td>
                    <span>Tidak Ada</span>
                </td>

                <td>
                    <span class="subtitle-status-imitasi" style="margin-left: 15px;"></span>
                </td>
                <td>
                    <span>Imitasi</span>
                </td>
            </tr>
        </table>

        <br>

        <table>
            <tr>
                <td>
                    <span style="margin-left:30px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Transmisi / CVT</span>
                </td>
                <td>
                    <span class="status-baik" style="margin-left:80px;"></span> 
                </td>

                <td>
                    <span style="margin-left:100px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Lampu Belakang</span> 
                </td>
                <td>
                    <span class="status-baik" style="margin-left:80px;"></span> 
                </td>
            </tr>
            <tr>
                <td>
                    <span style="margin-left:30px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Karburator / Injection</span> 
                </td>
                <td>
                    <span class="status-baik" style="margin-left:80px;"></span> 
                </td>

                <td>
                    <span style="margin-left:100px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Stang / Hand Grip</span> 
                </td>
                <td>
                    <span class="status-rusak" style="margin-left:80px;"></span> 
                </td>
            </tr>
            <tr>
                <td>
                    <span style="margin-left:30px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Accu / Battery</span> 
                </td>
                <td>
                    <span class="status-baik" style="margin-left:80px;"></span> 
                </td>

                <td>
                    <span style="margin-left:100px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Master / Caliper Rem</span> 
                </td>
                <td>
                    <span class="status-imitasi" style="margin-left:80px;"></span> 
                </td>
            </tr>
            <tr>
                <td>
                    <span style="margin-left:30px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Kunci Kontak</span> 
                </td>
                <td>
                    <span class="status-baik" style="margin-left:80px;"></span> 
                </td>

                <td>
                    <span style="margin-left:100px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Disc Rem Dpn</span> 
                </td>
                <td>
                    <span class="status-tidakada" style="margin-left:80px;"></span> 
                </td>
            </tr>
            <tr>
                <td>
                    <span style="margin-left:30px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Electric Starter</span> 
                </td>
                <td>
                    <span class="status-baik" style="margin-left:80px;"></span> 
                </td>

                <td>
                    <span style="margin-left:100px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Tromol Rem Dpn / Blk</span> 
                </td>
                <td>
                    <span class="status-baik" style="margin-left:80px;"></span> 
                </td>
            </tr>
            <tr>
                <td>
                    <span style="margin-left:30px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Kunci Pengaman</span> 
                </td>
                <td>
                    <span class="status-baik" style="margin-left:80px;"></span> 
                </td>

                <td>
                    <span style="margin-left:100px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Tuas / Pedal Rem</span> 
                </td>
                <td>
                    <span class="status-baik" style="margin-left:80px;"></span> 
                </td>
            </tr>
            <tr>
                <td>
                    <span style="margin-left:30px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Klakson</span> 
                </td>
                <td>
                    <span class="status-baik" style="margin-left:80px;"></span> 
                </td>

                <td>
                    <span style="margin-left:100px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Spakboard Dpn / Blk</span> 
                </td>
                <td>
                    <span class="status-baik" style="margin-left:80px;"></span> 
                </td>
            </tr>
            <tr>
                <td>
                    <span style="margin-left:30px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Dashboard / Instrumen Panel</span> 
                </td>
                <td>
                    <span class="status-baik" style="margin-left:80px;"></span> 
                </td>

                <td>
                    <span style="margin-left:100px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Cover Body Kanan / Kiri</span> 
                </td>
                <td>
                    <span class="status-baik" style="margin-left:80px;"></span> 
                </td>
            </tr>
            <tr>
                <td>
                    <span style="margin-left:30px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Jok</span> 
                </td>
                <td>
                    <span class="status-baik" style="margin-left:80px;"></span> 
                </td>

                <td>
                    <span style="margin-left:100px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Ban Dpn / Blk</span> 
                </td>
                <td>
                    <span class="status-baik" style="margin-left:80px;"></span> 
                </td>
            </tr>
            <tr>
                <td>
                    <span style="margin-left:30px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Kaca Spion Kanan / Kiri</span> 
                </td>
                <td>
                    <span class="status-baik" style="margin-left:80px;"></span> 
                </td>

                <td>
                    <span style="margin-left:100px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Shockabsorber Dpn / Blk</span> 
                </td>
                <td>
                    <span class="status-baik" style="margin-left:80px;"></span> 
                </td>
            </tr>
            <tr>
                <td>
                    <span style="margin-left:30px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Velg Racing / Standar</span> 
                </td>
                <td>
                    <span class="status-tidakada" style="margin-left:80px;"></span> 
                </td>

                <td>
                    <span style="margin-left:100px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Tangki BBM</span> 
                </td>
                <td>
                    <span class="status-baik" style="margin-left:80px;"></span> 
                </td>
            </tr>
            <tr>
                <td>
                    <span style="margin-left:30px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Emblem / Sticker</span> 
                </td>
                <td>
                    <span class="status-baik" style="margin-left:80px;"></span> 
                </td>

                <td>
                    <span style="margin-left:100px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Knalpot</span> 
                </td>
                <td>
                    <span class="status-rusak" style="margin-left:80px;"></span> 
                </td>
            </tr>
            <tr>
                <td>
                    <span style="margin-left:30px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Lampu - Lampu Sen</span> 
                </td>
                <td>
                    <span class="status-imitasi" style="margin-left:80px;"></span> 
                </td>

                <td>
                    <span style="margin-left:100px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Pull Step / Pijakan Kaki</span> 
                </td>
                <td>
                    <span class="status-baik" style="margin-left:80px;"></span> 
                </td>
            </tr>
            <tr>
                <td>
                    <span style="margin-left:30px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Lampu Besar</span> 
                </td>
                <td>
                    <span class="status-imitasi" style="margin-left:80px;"></span> 
                </td>

                <td>
                    <span style="margin-left:100px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Tool kit</span> 
                </td>
                <td>
                    <span class="status-baik" style="margin-left:80px;"></span> 
                </td>
            </tr>
            <tr>
                <td>
                    <span style="margin-left:30px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Lampu Kecil</span> 
                </td>
                <td>
                    <span class="status-rusak" style="margin-left:80px;"></span> 
                </td>

                <td>
                    <span style="margin-left:100px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Cover Knalpot</span> 
                </td>
                <td>
                    <span class="status-baik" style="margin-left:80px;"></span> 
                </td>
            </tr>
            <tr>
                <td>
                    <span style="margin-left:30px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Lampu Sen</span> 
                </td>
                <td>
                    <span class="status-baik" style="margin-left:80px;"></span> 
                </td>

                <td>
                    <span style="margin-left:100px;">•</span> 
                </td>
                <td>
                    <span style="margin-left:5px;">Bodi Sayap</span> 
                </td>
                <td>
                    <span class="status-rusak" style="margin-left:80px;"></span> 
                </td>
            </tr> 
        </table>
    </div>
</div>

<!-- Footer -->
<div>
    <table class="foot-note" width="100%">
        <tr>
            <td>
                <img class="divider" src="dompdf/src/Image/vec_line.png">
            </td>
        </tr>
        <tr>
            <td>
                <span class="title-foot">Catatan</span>
            </td>
        </tr>
    </table>
    <div class="text-footnote">
        <table>
            <tr>
                <td align="left">
                    Kondisi motor baik hanya terdapat beberapa perbaikan yang perlu dilakukan, noda kotor pada interior dan jok dak bias hilang, ketebalan cat normal
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="page-break"></div>

<!-- Header -->
<div>
    <table class="section-header" width="100%">
        <tr>
            <td align="left" width="80%">
                <img src="dompdf/src/Image/ic_logo.png" style="width: 23%;">
            </td>
            <td style="text-align:left;" width="20%">
                <h3 style="line-height:6px; font-weight:5px; font-size:22px;">Hasil</h3>
                <h3 style="line-height:6px; font-size:22px">Inspeksi</h3>
            </td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <td>
                <img class="divider" src="dompdf/src/Image/vec_line.png">
            </td>
        </tr>
        <tr>    
            <td>
                <span class="title-date">Tanggal :</span>
                <span class="text-date">24/09/2020</span>
                <span class="title-date" style="margin-left:80px;">Lokasi :</span>
                <span class="text-date">6</span>
                <br>
                <br>
                <span class="title-date">Tanda Tangan :</span>
                <span class="text-date"></span>
            </td>
            <td>
                <img src="dompdf/src/Image/qrcode.png" style="width:10%; margin-left:15px;">
            </td> 
        </tr>
    </table>
</div>

<!-- Kondisi Cat / Body Saat Masuk -->
<div>
    <table class="section-title" width="100%">
        <tr>
            <td>
                <span style="margin-left:20px;">Kondisi Cat / Body Saat Masuk</span> 
            </td>
        </tr>
    </table>

    <div class="text-content">
        <table width="100%">
            <tr>
                <td align="center">
                    Keterangan Kode:
                </td>
            </tr>
        </table>
        
        <table align="center">   
            <tr>
                <td>
                    <span class="subtitle-status-baret"></span>
                </td>
                <td>
                    <span>Baret</span>
                </td>

                <td>
                    <span class="subtitle-status-penyok" style="margin-left: 15px;"></span>
                </td>
                <td>
                    <span>Penyok</span>
                </td>

                <td>
                    <span class="subtitle-status-retak" style="margin-left: 15px;"></span>
                </td>
                <td>
                    <span>Retak</span>
                </td>

                <td>
                    <span class="subtitle-status-pecah" style="margin-left: 15px;"></span>
                </td>
                <td>
                    <span>Pecah</span>
                </td>
            </tr>
        </table>

        <div class="mt-30">
            <table align="center">
                <tr>
                    <td>
                        <img src="dompdf/src/Image/img_motor.png" style="width:56%">
                    </td>
                </tr>
            </table>
        </div>
    </div> 
</div>

<!-- Footer -->
<div>
    <table class="foot-note" width="100%">
        <tr>
            <td>
                <img class="divider" src="dompdf/src/Image/vec_line.png">
            </td>
        </tr>
        <tr>
            <td>
                <span class="title-foot">Catatan</span>
            </td>
        </tr>
    </table>
    <div class="text-footnote">
        <table>
            <tr>
                <td align="left">
                    Kondisi motor baik hanya terdapat beberapa perbaikan yang perlu dilakukan, noda kotor pada interior dan jok dak bias hilang, ketebalan cat normal
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="page-break"></div>

<!-- Header -->
<div>
    <table class="section-header" width="100%">
        <tr>
            <td align="left" width="80%">
                <img src="dompdf/src/Image/ic_logo.png" style="width: 23%;">
            </td>
            <td style="text-align:left;" width="20%">
                <h3 style="line-height:6px; font-weight:5px; font-size:22px;">Hasil</h3>
                <h3 style="line-height:6px; font-size:22px">Inspeksi</h3>
            </td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <td>
                <img class="divider" src="dompdf/src/Image/vec_line.png">
            </td>
        </tr>
        <tr>    
            <td>
                <span class="title-date">Tanggal :</span>
                <span class="text-date">24/09/2020</span>
                <span class="title-date" style="margin-left:80px;">Lokasi :</span>
                <span class="text-date">6</span>
                <br>
                <br>
                <span class="title-date">Tanda Tangan :</span>
                <span class="text-date"></span>
            </td>
            <td>
                <img src="dompdf/src/Image/qrcode.png" style="width:10%; margin-left:15px;">
            </td> 
        </tr>
    </table>
</div>

<!-- Foto Unit Kendaraan -->
<div>
    <table class="section-title" width="100%">
        <tr>
            <td>
                <span style="margin-left:20px;">Foto Unit Kendaraan</span> 
            </td>
        </tr>
    </table>

    <div class="text-foot" style="margin-top:58px; height:auto;">
        <div style="display:inline-block">
            <div style="width:50%">
                <table>
                    <td>
                        <table>
                            <tr>
                                <td>
                                    <span style="margin-left:30px; font-size: 14px; color:#232323">Bagian Depan</span>
                                    <br>
                                    <img src="dompdf/src/Image/img_motor_depan.png" style="width:330px ; height:220px; margin-left:30px; margin-top:7px;">
                                </td>
                            </tr>
                        </table>
                    </td>
                </table>
            </div>
        </div>

        <div style="display:inline-block">
            <div style="width:50%;">
                <table>
                    <td>
                        <table>
                            <tr>
                                <td>
                                    <span style="margin-left:50px; font-size: 14px; color:#232323">Bagian Belakang</span>
                                    <br>
                                    <img src="dompdf/src/Image/img_motor_belakang.png" style="width:330px ; height:220px; margin-left:50px; margin-top:5px;">
                                </td>
                            </tr>
                        </table>
                    </td>
                </table>
            </div>    
        </div>
    </div>

    <div class="text-foot" style="margin-top:5px; height:auto;">
        <div style="display:inline-block">
            <div style="width:50%">
                <table>
                    <td>
                        <table>
                            <tr>
                                <td>
                                    <span style="margin-left:30px; font-size: 14px; color:#232323">Bagian Kiri</span>
                                    <br>
                                    <img src="dompdf/src/Image/img_motor_kiri.png" style="width:330px ; height:220px; margin-left:30px; margin-top:5px;">
                                </td>
                            </tr>
                        </table>
                    </td>
                </table>
            </div>
        </div>

        <div style="display:inline-block">
            <div style="width:50%;">
                <table>
                    <td>
                        <table>
                            <tr>
                                <td>
                                    <span style="margin-left:50px; font-size: 14px; color:#232323">Bagian Kanan</span>
                                    <br>
                                    <img src="dompdf/src/Image/img_motor_kanan.png" style="width:330px ; height:220px; margin-left:50px; margin-top:5px;">
                                </td>
                            </tr>
                        </table>
                    </td>
                </table>
            </div>    
        </div>
    </div>

    <div class="text-foot" style="margin-top:5px; height:auto;">
        <div style="display:inline-block">
            <div style="width:50%">
                <table>
                    <td>
                        <table>
                            <tr>
                                <td>
                                    <span style="margin-left:30px; font-size: 14px; color:#232323">Bagian Atas</span>
                                    <br>
                                    <img src="dompdf/src/Image/img_motor_atas.png" style="width:330px ; height:220px; margin-left:30px; margin-top:5px;">
                                </td>
                            </tr>
                        </table>
                    </td>
                </table>
            </div>
        </div>
        <div style="display:inline-block">
            <div style="width:50%">
                <table></table>
            </div>
        </div>
    </div>
</div>

<div class="page-break"></div>

<!-- Header -->
<div>
    <table class="section-header" width="100%">
        <tr>
            <td align="left" width="80%">
                <img src="dompdf/src/Image/ic_logo.png" style="width: 23%;">
            </td>
            <td style="text-align:left;" width="20%">
                <h3 style="line-height:6px; font-weight:5px; font-size:22px;">Hasil</h3>
                <h3 style="line-height:6px; font-size:22px">Inspeksi</h3>
            </td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <td>
                <img class="divider" src="dompdf/src/Image/vec_line.png">
            </td>
        </tr>
        <tr>    
            <td>
                <span class="title-date">Tanggal :</span>
                <span class="text-date">24/09/2020</span>
                <span class="title-date" style="margin-left:80px;">Lokasi :</span>
                <span class="text-date">6</span>
                <br>
                <br>
                <span class="title-date">Tanda Tangan :</span>
                <span class="text-date"></span>
            </td>
            <td>
                <img src="dompdf/src/Image/qrcode.png" style="width:10%; margin-left:15px;">
            </td> 
        </tr>
    </table>
</div>

<!-- Foto Dokumen Kendaraan -->
<div>
    <table class="section-title" width="100%">
        <tr>
            <td>
                <span style="margin-left:20px;">Foto Dokumen Kendaraan</span> 
            </td>
        </tr>
    </table>

    <div class="text-foot" style="margin-top:58px; height:auto;">
        <div style="display:inline-block">
            <div style="width:50%">
                <table>
                    <td>
                        <table>
                            <tr>
                                <td>
                                    <span style="margin-left:30px; font-size: 14px; color:#232323">STNK</span>
                                    <br>
                                    <img src="dompdf/src/Image/img_motor_stnk.png" style="width:330px ; height:220px; margin-left:30px; margin-top:7px;">
                                </td>
                            </tr>
                        </table>
                    </td>
                </table>
            </div>
        </div>

        <div style="display:inline-block">
            <div style="width:50%;">
                <table>
                    <td>
                        <table>
                            <tr>
                                <td>
                                    <span style="margin-left:50px; font-size: 14px; color:#232323">BPKB</span>
                                    <br>
                                    <img src="dompdf/src/Image/img_motor_bpkb.png" style="width:330px ; height:220px; margin-left:50px; margin-top:5px;">
                                </td>
                            </tr>
                        </table>
                    </td>
                </table>
            </div>    
        </div>
    </div>
</div>


<!-- CSS Style -->
<style type="text/css">
    @page{
        margin: 0px;
    }
    * {
        font-family: "NeoSans-regular", Helvetica, sans-serif;
    }
    .section-header {
        background-color: #903f98;
        color: #ffffff;
    }
    .section-title {
        background-color: #F5E9F3;
        color: #903f98;
        font-size: 16px;
        font-style: bold;
        margin-top: 20px;
        margin-bottom: 10px;
        border-left: 10px solid #903f98;
        height:30px;
    }
    .foot-note {
        margin-top: 10px;
    }
    .divider {
        margin-top: 15px;
        margin-left: 30px;
        margin-bottom: 4px;
    }
    .title-date {
        margin-left: 30px;
        font-size: 14px;
        font-style: bold;
        color : #903f98;
    }
    .mb-20 {
        margin-bottom: 20px;
    }
    .mt-30 {
        margin-top: 30px;
    }
    .text-date {
        font-size: 14px;
        color : #903f98;
    }
    .text-content {
        font-size: 14px;
        color : #232323;
        line-height: 22px;
    }
    .text-foto {
        font-size: 14px;
        color : #232323;
        line-height: 22px;
    }
    .text-komponen {
        font-size: 14px;
        color : #232323;
        line-height: 22px;
    }
    .subtitle-status-baik {
        display: block;
        float: left;
        width: 10px;
        height: 10px;
        margin-right: 10px;
        margin-top: 8px;
        background-color: #82C14F;
        border-radius: 5px;
        position: static;
    }
    .subtitle-status-rusak {
        display: block;
        float: left;
        width: 10px;
        height: 10px;
        margin-right: 10px;
        margin-top: 8px;
        background-color: #F2D148;
        border-radius: 5px;
        position: relative;
    }
    .subtitle-status-tidakada {
        display: block;
        float: left;
        width: 10px;
        height: 10px;
        margin-right: 10px;
        margin-top: 8px;
        background-color: #D83031;
        border-radius: 5px;
        position: relative;
    }
    .subtitle-status-imitasi {
        display: block;
        float: left;
        width: 10px;
        height: 10px;
        margin-right: 10px;
        margin-top: 8px;
        background-color: #F09135;
        border-radius: 5px;
        position: relative;
    }
    .subtitle-status-baret {
        display: block;
        float: left;
        width: 10px;
        height: 10px;
        margin-right: 10px;
        margin-top: 8px;
        background-color: #62A6DA;
        border-radius: 5px;
        position: relative;
    }
    .subtitle-status-penyok {
        display: block;
        float: left;
        width: 10px;
        height: 10px;
        margin-right: 10px;
        margin-top: 8px;
        background-color: #82C14F;
        border-radius: 5px;
        position: relative;
    }
    .subtitle-status-retak {
        display: block;
        float: left;
        width: 10px;
        height: 10px;
        margin-right: 10px;
        margin-top: 8px;
        background-color: #F2D148;
        border-radius: 5px;
        position: relative;
    }
    .subtitle-status-pecah {
        display: block;
        float: left;
        width: 10px;
        height: 10px;
        margin-right: 10px;
        margin-top: 8px;
        background-color: #D83031;
        border-radius: 5px;
        position: relative;
    } 
    .status-baik {
        display: block;
        float: right;
        width: 10px;
        height: 10px;
        margin-right: 10px;
        margin-top: 8px;
        background-color: #82C14F;
        border-radius: 5px;
        position: relative;
    }
    .status-rusak {
        display: block;
        float: right;
        width: 10px;
        height: 10px;
        margin-right: 10px;
        margin-top: 8px;
        background-color: #F2D148;
        border-radius: 5px;
        position: relative;
    }
    .status-tidakada {
        display: block;
        float: right;
        width: 10px;
        height: 10px;
        margin-right: 10px;
        margin-top: 8px;
        background-color: #F2D148;
        border-radius: 5px;
        position: relative;
    }
    .status-imitasi {
        display: block;
        float: right;
        width: 10px;
        height: 10px;
        margin-right: 10px;
        margin-top: 8px;
        background-color: #F09135;
        border-radius: 5px;
        position: relative;
    }   
    .title-foot {
        margin-left: 30px;
        font-size: 12px;
    }
    .text-footnote {
        margin-top: 0px;
        padding-left: 50px;
        padding-right: 15px;
        font-size: 12px;
        position: relative;
    }
</style>

<?php
$html=ob_get_clean();

$pdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$pdf->setPaper('A4', 'potrait');

// Render the HTML as PDF
$pdf->render();

// Output the generated PDF to Browser
$pdf->stream('result.pdf', Array('Attachment'=>0));

?>