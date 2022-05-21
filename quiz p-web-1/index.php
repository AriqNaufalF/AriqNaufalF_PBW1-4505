<!doctype html>
<html lang="en">
<?php include('controller.php') ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quis PBW 1</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Quis Pemrograman Web 1</h1>
        <table class="table table-success table-striped caption-top mb-3">
            <caption>Table Mahasiswa</caption>
            <thead>
                <tr>
                    <th scope="col">NIM</th>
                    <th scope="col">NamaMHS</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">TELP</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($mhs)) : ?>
                    <tr>
                        <th scope="row"><?= $row['NIM']; ?></th>
                        <td><?= $row['NamaMHS']; ?></td>
                        <td><?= $row['ALAMAT']; ?></td>
                        <td><?= $row['TELP']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <table class="table table-success table-striped caption-top mb-3">
            <caption>Table Mahasiswa yang berasal dari surakarta</caption>
            <thead>
                <tr>
                    <th scope="col">NIM</th>
                    <th scope="col">NamaMHS</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">TELP</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($mhsSurakarta)) : ?>
                    <tr>
                        <th scope="row"><?= $row['NIM']; ?></th>
                        <td><?= $row['NamaMHS']; ?></td>
                        <td><?= $row['ALAMAT']; ?></td>
                        <td><?= $row['TELP']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <!-- prodi -->
        <table class="table table-success table-striped caption-top mb-3">
            <caption>Table Prodi</caption>
            <thead>
                <tr>
                    <th scope="col">KD_PRODI</th>
                    <th scope="col">NAMA_PRODI</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($prodi)) : ?>
                    <tr>
                        <th scope="row"><?= $row['KD_PRODI']; ?></th>
                        <td><?= $row['NAMA_PRODI']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <!-- dosen -->
        <table class="table table-success table-striped caption-top mb-3">
            <caption>Table Dosen</caption>
            <thead>
                <tr>
                    <th scope="col">KD_DOSEN</th>
                    <th scope="col">NAMA_DOSEN</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">NO_TELP</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($dosen)) : ?>
                    <tr>
                        <th scope="row"><?= $row['KD_DOSEN']; ?></th>
                        <td><?= $row['NAMA_DOSEN']; ?></td>
                        <td><?= $row['ALAMAT']; ?></td>
                        <td><?= $row['NO_TELP']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <table class="table table-success table-striped caption-top mb-3">
            <caption>Table Dosen yang berasal dari Yogyakarta</caption>
            <thead>
                <tr>
                    <th scope="col">KD_DOSEN</th>
                    <th scope="col">NAMA_DOSEN</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">NO_TELP</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($dosenJogja)) : ?>
                    <tr>
                        <th scope="row"><?= $row['KD_DOSEN']; ?></th>
                        <td><?= $row['NAMA_DOSEN']; ?></td>
                        <td><?= $row['ALAMAT']; ?></td>
                        <td><?= $row['NO_TELP']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <!-- matkul -->
        <table class="table table-success table-striped caption-top mb-3">
            <caption>Table Matkul</caption>
            <thead>
                <tr>
                    <th scope="col">KD_MATKUL</th>
                    <th scope="col">NAMA_MATKUL</th>
                    <th scope="col">SKS</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($matkul)) : ?>
                    <tr>
                        <th scope="row"><?= $row['KD_MATKUL']; ?></th>
                        <td><?= $row['NAMA_MATKUL']; ?></td>
                        <td><?= $row['SKS']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <table class="table table-success table-striped caption-top mb-3">
            <caption>Table Matkul yang memiliki bobot SKS 3</caption>
            <thead>
                <tr>
                    <th scope="col">KD_MATKUL</th>
                    <th scope="col">NAMA_MATKUL</th>
                    <th scope="col">SKS</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($matkul3SKS)) : ?>
                    <tr>
                        <th scope="row"><?= $row['KD_MATKUL']; ?></th>
                        <td><?= $row['NAMA_MATKUL']; ?></td>
                        <td><?= $row['SKS']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>