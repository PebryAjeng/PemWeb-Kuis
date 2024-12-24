<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Mahasiswa</h1>
    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $mahasiswa->nama }}"><br>
        <label>NIM:</label>
        <input type="text" name="nim" value="{{ $mahasiswa->nim }}"><br>
        <label>Jurusan:</label>
        <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}"><br>
        <button type="submit">Perbarui</button>
    </form>
</body>
</html>
