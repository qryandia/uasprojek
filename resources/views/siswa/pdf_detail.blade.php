<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan</title>
</head>
<body>
    <div style="text-align: center;">
        <img src="{{ public_path('img/logo.png') }}" width="50" height="50" alt="">
        <h3 style="font-size: 18px; padding-bottom:10px; ">Detail Pesanan: {{ $kelas->nama_kelas }}</h3>
        <img src="{{ public_path('img/bayar.jpg') }}" style="padding-button:10px;" width="200" height="230" alt="">
    </div>
    <div style="border: 1px solid #ddd; padding: 20px; border-radius: 8px; margin: 20px 0;">
        <div style="padding-left: 20px; padding-right: 20px;">
            <p>Nama Lengkap: {{ $pengguna->name }}</p>
            <p>No Hp: {{ $registrasi->no_hp }}</p>
            <p>Kelas: {{ $kelas->nama_kelas }}</p>
            <p>Tempat Les: {{ $registrasi->tempat_les }}</p>
            <p style="color:red;">Total Biaya: Rp{{ number_format($harga->harga, 2, ',', '.') }}</p>
        </div>
    </div>
</body>
</html>
