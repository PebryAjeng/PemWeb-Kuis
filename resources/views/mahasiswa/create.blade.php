<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Tambah Mahasiswa</h1>
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama"><br>
        <label>NIM:</label>
        <input type="text" name="nim"><br>
        <label>Jurusan:</label>
        <input type="text" name="jurusan"><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
