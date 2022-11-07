<html>
    <head>
        <title>Laporan Mahasiswa</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <style>
            body{
                padding: 15px;
            }
            h5{
                margin-top: -15px;
            }
            table, th td {
                border: 1px solid;
            }
        </style>
        <br>
        <br>
        <a target ="_blank" 
        href="/laporan/mahasiswa/pdf" 
        class="btn btn-primary">Cetak PDF</a>
        <br>
        <h1>
            UNIVERSITAS PASTI JAYA<br>
            FAKULTAS ILMU KOMPUTER
        </h1>
        <h5>Jalan PAsti Ada No.777<br>
            Tlp. 061.777777
        </h5>
        <br>
        <hr>
        <center><h3>Laporan Mahasiswa</h3></center>
        <table>
            <tr>
                <th>StudentID</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Tahun Masuk</th>
            @foreach ($mahasiswa as $mhs)
            <tr>
                <td>{{$mhs->studentID}}</td>
                <td>{{$mhs->nama}}</td>
                <td>{{$mhs->jurusan}}</td>
                <td>{{$mhs->tahunMasuk}}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>