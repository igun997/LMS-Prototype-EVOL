<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body>
<h2 align="center">Raport Siswa</h2>
<table>
    <tr>
        <th>Nama Lengkap</th>
        <td>{{$siswa->nama}}</td>
    </tr>
    <tr>
        <th>Kelas</th>
        <td>{{$siswa->kela->kela->nama}} - {{$siswa->kela->nama}}</td>
    </tr>

</table>
<br>
<table>
    <tr>
        <th>No</th>
        <th>Mata Pelajaran</th>
        <th>Nilai</th>
        <th>Predikat</th>
        <th>Deskripsi</th>
    </tr>
    @foreach($list as $k => $row)
        <tr>
            <td>{{($k+1)}}</td>
            <td>{{$row["matpel"]}}</td>
            <td>{{$row["nilai"]}}</td>
            <td>
                @if($row["nilai"] > 0 && $row["nilai"] <= 50)
                    C
                @elseif($row["nilai"] > 50)
                    B
                @else
                    A
                @endif
            </td>
            <td></td>
        </tr>
    @endforeach
</table>

</body>
</html>
