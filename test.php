<?php
// Menangani pengunggahan file
if (isset($_POST['submit'])) {
    // Mendapatkan informasi file yang diunggah
    $namafile = $_FILES['upload']['name'];
    $tempatfile = $_FILES['upload']['tmp_name'];
    $error = $_FILES['upload']['error'];
    $ukuranfile = $_FILES['upload']['size'];

    // Cek jika tidak ada error
    if ($error === 0) {
        // Memindahkan file langsung ke lokasi file PHP ini berada
        if (move_uploaded_file($tempatfile, $namafile)) {
            echo "<script>alert('File berhasil diunggah!');</script>";
        } else {
            echo "<script>alert('Gagal mengunggah file.');</script>";
        }
    } else {
        echo "<script>alert('Terjadi error saat mengunggah file.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Upload File</title>
</head>
<body>
    <h1>Unggah File</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="upload">Pilih file:</label>
        <input type="file" name="upload" id="upload" required>
        <br><br>
        <button type="submit" name="submit">Upload</button>
    </form>
</body>
</html>
