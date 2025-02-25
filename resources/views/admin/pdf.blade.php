<!DOCTYPE html>
<html>
<head>
    <title>Cetak PDF</title>
    <style type="text/css">
        .tabel1 {
            font-family: sans-serif;
            color: #232323;
            border-collapse: collapse;
        }
        .tabel1, th, td {
            border: 1px solid #999;
            padding: 8px 20px;
        }
    </style>
</head>
<body>
    <h4 align="center">Data Murid ALC</h4>
    <table class="table table-bordered table-striped table-bordered" style="border: none;">
    <thead style="border: none;">
        <tr class="" style="font-size:12px;">
            <th style="width: 1%; border: none;">No.</th>
            <th style="width: 5%; border: none;">Nama Panggilan</th>
            <th style="width: 5%; border: none;">Tempat Lahir</th>
            <th style="width: 5%; border: none;">Tanggal Lahir</th>
            <th style="width: 5%; border: none;">Jenis Kelamin</th>
            <th style="width: 5%; border: none;">Agama</th>
            <th style="width: 5%; border: none;">Alamat</th>
            <th style="width: 5%; border: none;">No HP</th>
            <th style="width: 5%; border: none;">Tempat Les</th>
            <th style="width: 5%; border: none;">Kelas</th>
            <th style="width: 5%; border: none;">Les Dimulai</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataRegistrasi as $data)
        <tr style="font-size:10px;" style="border: none;">
            <td style="border: none;">{{ $loop->iteration }}</td>
            <td style="border: none;">{{ $data->nama_panggilan }}</td>
            <td style="border: none;">{{ $data->tempat_lahir }}</td>
            <td style="border: none;">{{ $data->tanggal_lahir }}</td>
            <td style="border: none;">{{ $data->jenis_kelamin }}</td>
            <td style="border: none;">{{ $data->agama }}</td>
            <td style="border: none;">{{ $data->alamat }}</td>
            <td style="border: none;">{{ $data->no_hp }}</td>
            <td style="border: none;">{{ $data->tempat_les }}</td>
            <td style="border: none;">{{ $data->kelas->nama_kelas ?? 'Tidak ada kelas' }}</td>
            <td style="border: none;">{{ $data->les_dimulai }}</td>
        
        </tr>
    @endforeach
    </tbody>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
