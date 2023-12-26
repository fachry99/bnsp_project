<?php

include('config.php');
session_start();


?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Beasiswa</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <!-- // bagian navbar yang berisi link ke halaman lainnya -->
    <div class="container pt-3">
        <nav class="nav nav-pills nav-fill shadow">
            <a class="nav-link text-white" aria-current="page" href="index.php">Pilihan Pendaftaran</a>
            <a class="nav-link text-white" href="pendaftaran.php">Daftar</a>
            <a class="nav-link active" href="hasil.php">Hasil</a>
            <a class="nav-link text-white" href="tabel_pendaftaran.php">List Pendaftaran</a>
        </nav>
    </div>
    <!-- // garis pembatas -->
    <hr class="border border-black border-3 opacity-75">
    <!-- // bagian hasil pendaftaran beasiswa -->
    <div class="container d-flex justify-content-center text-white">
        <div class="card mt-5" style="width: 50%;">
            <h4 class="text-center mt-4">Hasil</h4>
            <div class="card-body">
                <table class="table table-responsive table-bordered">
                    <tbody>
                        <?php
                            include('config.php');

                            $query = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY id DESC");
                            $user = mysqli_fetch_assoc($query);
                        ?>
                        <tr>
                            <td width="200px">Nama</td>
                            <td><?= $user['name'] ?></td>
                        </tr>
                        <tr>
                            <td width="200px">Email</td>
                            <td><?= $user['email'] ?></td>
                        </tr>
                        <tr>
                            <td width="200px">Nomor Handphone</td>
                            <td><?= $user['phone_number'] ?></td>
                        </tr>
                        <tr>
                            <td width="200px">Semester</td>
                            <td><?= $user['semester'] ?></td>
                        </tr>
                        <tr>
                            <td width="200px">IPK</td>
                            <td><?= $user['ipk'] ?></td>
                        </tr>
                        <tr>
                            <td width="200px">Beasiswa</td>
                            <td><?= $user['beasiswa'] ?></td>
                        </tr>
                        <tr>
                            <td width="200px">Status</td>
                            <?php 
                                if ($user['status'] == "Verifikasi"){
                                    echo '
                                    <td class="badge rounded-pill text-bg-success mt-2">
                                        Verifikasi
                                    </td>';
                                }else {
                                    echo '
                                    <td class="badge rounded-pill text-bg-warning mt-2">
                                        Belum di Verifikasi
                                    </td>';
                                }
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>