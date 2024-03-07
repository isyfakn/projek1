<!-- resources/views/mahasiswa/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Tambah Mahasiswa</h1>
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <div>
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim">
        </div>
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
        </div>
        <div>
            <label for="prodi">Prodi:</label>
            <input type="text" id="prodi" name="prodi">
        </div>
        <div>
            <label for="fakultas">Fakultas:</label>
            <input type="text" id="fakultas" name="fakultas">
        </div>
        <div>
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select name="jenis_kelamin" id="jenis_kelamin">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <button type="submit">Tambah Mahasiswa</button>
    </form>
</body>
</html>
