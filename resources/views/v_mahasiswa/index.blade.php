<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>{{$judul}}</h1>
    <table class="table table-dark table-striped">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Fakultas</th>
            <th>Jenis Kelamin</th>
        </tr>
        @foreach ($mahasiswa as $index => $row)
        <tr>
            <td>{{ $row->nim }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->prodi }}</td>
            <td>{{ $row->fakultas }}</td>
            <td>{{ $row->jenis_kelamin }}</td>
        </tr>
        @endforeach
    </table>
    <style>
        table {
            margin-bottom: 20px; /* gives space between table and button */
        }

        button {
            padding: 10px 20px; /* adds padding to the button */
        }
    </style>
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Tambah Data</a>
</body>
</html>