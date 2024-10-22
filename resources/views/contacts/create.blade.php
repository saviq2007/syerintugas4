<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kontak</title>
</head>
<body>
    <h1>Tambah Kontak</h1>
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <label for="name">Nama:</label>
        <input type="text" name="name" required>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <label for="phone">Telepon:</label>
        <input type="text" name="phone" required>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
