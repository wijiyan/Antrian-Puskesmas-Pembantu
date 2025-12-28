<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Cetak Antrian</title>

<style>
@media print {
    body {
        width: 58mm; /* ganti 80mm jika printer besar */
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
        color: #000;
    }
}

body {
    text-align: center;
    padding: 6px;
}

/* LOGO */
.logo img {
    max-width: 60px;
    margin-bottom: 5px;
}

/* HEADER */
.header {
    font-size: 14px;
    font-weight: bold;
}

.subheader {
    font-size: 11px;
    margin-bottom: 5px;
}

/* GARIS */
.line {
    border-top: 1px dashed #000;
    margin: 6px 0;
}

/* JUDUL */
.judul {
    font-size: 13px;
    font-weight: bold;
    margin-top: 4px;
}

/* NOMOR ANTRIAN */
.nomor {
    font-size: 48px;
    font-weight: bold;
    margin: 8px 0;
}

/* INFO */
.info {
    font-size: 10px;
    text-align: left;
    margin-top: 5px;
}

/* FOOTER */
.footer {
    font-size: 10px;
    margin-top: 8px;
}
</style>
</head>

<body onload="window.print(); window.close();">

<!-- LOGO -->
<div class="logo">
    <img src="<?= base_url('assets/logo_puskesmas.png') ?>" alt="Logo Puskesmas">
</div>

<!-- HEADER -->
<div class="header">PUSKESMAS RAWASARI</div>
<div class="subheader">Kota Administrasi Jakarta Pusat</div>

<div class="line"></div>

<div class="judul">ANTRIAN PENDAFTARAN</div>

<div class="nomor"><?= $nomor ?></div>

<div class="line"></div>

<div class="info">
Tanggal : <?= date('d-m-Y') ?><br>
Jam     : <?= date('H:i') ?> WIB
</div>

<div class="line"></div>

<div class="footer">
Harap menunggu hingga<br>
nomor Anda dipanggil
</div>

</body>
</html>
