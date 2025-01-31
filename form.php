<?php
session_start(); // Memulai session

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form surat_izin Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Form surat_izin Mahasiswa</h2>
        <form action="create.php" method="POST">
            <div class="form-group">
                <label>nim_mahasiswa</label>
                <input type="text" name="nim_mahasiswa" class="form-control" required>
            </div>
            <div class="form-group">
                <label>alasan</label>
                <input type="text" name="alasan" class="form-control" required>
            </div>
            <div class="form-group">
                <label>tanggal_izin</label>
                <input type="number" name="tanggal_izin" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>