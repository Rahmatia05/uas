<?php

    $mysqli = new mysqli('localhost', 'root', '', 'uas');

    $sql = $mysqli->query("SELECT surat_izin.id, surat_izin.nim_mahasiswa, surat_izin.alasan, surat_izin.tanggal_izin
                            FROM surat_izin");
   $push = [];

    while ($row = $sql->fetch_assoc()) {
        array_push($push, $row);
    }

    $no = 1
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>surat izin Mahasiswa</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container"> 
    <h1 class="text-center">Data surat izin Mahasiswa</h1>
    <a href="create.php" class="btn btn-primary">Add</a>
    <a href="logout.php" class="btn btn-warning">Logout</a><br></br>

    <table class="table table-bordered table-hover">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">NIM Mahasiswa</th>
            <th class="text-center">Alasan</th>
            <th class="text-center">Tanggal Izin</th>
            <th class="text-center">Aksi</th>
        </tr>
        <?php foreach ($push as $row ) { ?>
            <tr>
                <td class="text-center"><?=$no++; ?></td>
                <td><?=$row['nim_mahasiswa'];?></td>
                <td><?=$row['alasan'];?></td>
                <td><?=$row['tanggal_izin'];?></td>
                <td>
                    <a href="update.php?id=<?=$row['id']?>" class="btn btn-success">Edit</a>
                    <a href="delete.php?id=<?=$row['id']?>" class="btn btn-danger" onclick="return confirm('Yakin data ini akan dihapus?')">Delete</a>

                </td>
            </tr>
        <?php } ?>
    </table>  
    </div>  
</body>
</html>
