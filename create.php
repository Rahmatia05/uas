<?php


    $mysqli = new mysqli('localhost', 'root', '', 'uas');

    $sql = $mysqli->query("SELECT * FROM surat_izin");
    
    if (isset($_POST['nim_mahasiswa'])) {
        $nim_mahasiswa = $_POST['nim_mahasiswa'];
        $alasan = $_POST['alasan'];
        $tanggal_izin = $_POST['tanggal_izin'];

        $insert = $mysqli->query("INSERT INTO surat_izin(nim_mahasiswa, alasan, tanggal_izin) 
                                            VALUES ('$nim_mahasiswa', '$alasan', '$tanggal_izin')");
        if ($insert) {
            header("Location: index.php");
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah surat_izin Mahasiswa</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
    <h1 class="text-center">Tambah surat_izin Mahasiswa</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="nim_mahasiswa" class="form-label">nim_ahasiswa</label>
            <input type="text" class="form-control" id="nim_mahasiswa" name="nim_mahasiswa">
        </div>
        <div class="mb-3">
            <label for="alasan" class="form-label">$alasan</label>
            <input type="text" class="form-control" id="alasan" name="alasan">
        </div>
        <div class="mb-3">
            <label for="tanggal_izin" class="form-label">tanggal_izin</label>
            <input type="date" class="form-control" id="tanggal_izin" name="tanggal_izin">
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-warning">Cancel</a>
        </div>
    </form>
</body>
</html>