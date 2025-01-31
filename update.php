<?php

    $mysqli = new mysqli('localhost', 'root', '', 'uas');

    $id = $_GET['id'];
    $sql = $mysqli->query("SELECT * FROM surat_izin WHERE id='$id'");
    $data = $sql->fetch_assoc();     
    
    if (isset($_POST['nim_mahasiswa'])) {
        $nim_mahasiswa = $_POST['nim_mahasiswa'];
        $alasan = $_POST['alasan'];
        $tanggal_izin = $_POST['tanggal_izin'];
       
        $update = $mysqli->query("UPDATE surat_izin SET nim_mahasiswa='$nim_mahasiswa', alasan='$alasan', tanggal_izin='$tanggal_izin' WHERE id='$id'");

        if($update) {
           
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
    <title>Form Update Prestasi Mahasiswa</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class ="container">
    <h1 class="text-center">Update Prestasi Mahasiswa</h1>
    <form method ="POST">
        <div class="mb-3">
            <label for="nim_mahasiswa" class="form-label">Mahasiswa</label>
            <input type="text" class="form-control" id="nim_mahasiswa" name="nim_mahasiswa" value="<?= $data['nim_mahasiswa']?>">
        </div>
        <div class="mb-3">
            <label for="alasan" class="form-label">Prestasi</label>
            <input type="text" class="form-control" id="alasan" name="alasan" value="<?= $data['alasan']?>">
        </div>
        <div class="mb-3">
            <label for="tanggal_izin" class="form-label">Tahun</label>
            <input type="date" class="form-control" id="tanggal_izin" name="tanggal_izin" value="<?= $data['tanggal_izin']?>">
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-warning">Cancel</a>
        </div>
    </form>   
</body>
</html>