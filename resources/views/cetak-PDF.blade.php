<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><center>Laporan Data Santri</center></h3>
    <table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>#ID</th>
        <th>Nama Satri</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>No. Hp</th>
    </tr>
    @foreach($pengaduan as $cetak)  
    <tr>
        <td>{{$cetak->id_pengaduan}}</td>
        <td>{{$cetak->}}</td>
        <td>{{$cetak->tmp_lahir}}</td>
        <td>{{$cetak->tgl_lahir}}</td>
        <td>{{$cetak->alamat}}</td>
        <td>{{$cetak->no_hp}}</td>
    </tr>
    @endforeach
    </table>
</body>
</html>