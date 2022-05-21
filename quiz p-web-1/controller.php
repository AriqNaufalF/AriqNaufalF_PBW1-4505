<?php
include('config.php');

$mhs = mysqli_query($conn, "SELECT * FROM mahasiswa;");
$mhsSurakarta = mysqli_query($conn, "SELECT * FROM mahasiswa
    WHERE ALAMAT='SURAKARTA';");

$prodi = mysqli_query($conn, "SELECT * FROM prodi;");

$dosen = mysqli_query($conn, "SELECT * FROM dosen;");
$dosenJogja = mysqli_query($conn, "SELECT * FROM dosen
    WHERE ALAMAT='YOGYAKARTA';");

$matkul = mysqli_query($conn, "SELECT * FROM matkul;");
$matkul3SKS = mysqli_query($conn, "SELECT * FROM matkul
    WHERE SKS='3';");
