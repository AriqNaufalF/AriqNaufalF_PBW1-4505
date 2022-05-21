<?php
include('config.php');

// Membuat tabel mahasiswa
$tMhs = "CREATE TABLE Mahasiswa (
    NIM VARCHAR(9) PRIMARY KEY,
    NAMA VARCHAR(25),
    ALAMAT VARCHAR(30),
    TELP VARCHAR(12));";

$alterMhs = "ALTER TABLE mahasiswa RENAME COLUMN NAMA TO NamaMHS;";

if (mysqli_query($conn, $tMhs)) {
    echo "Table Mahasiswa created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

if (mysqli_query($conn, $alterMhs)) {
    echo "Column NAME change to NamaMHS in Mahasiswa success";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Membuat tabel prodi
$tProdi = "CREATE TABLE Prodi (
    KD_PRODI INT(4) AUTO_INCREMENT PRIMARY KEY,
    NAMA_PRODI VARCHAR(25));";

if (mysqli_query($conn, $tProdi)) {
    echo "Table Prodi created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Membuat tabel dosen
$tDosen = "CREATE TABLE Dosen (
    KD_DOSEN VARCHAR(6) PRIMARY KEY,
    NAMA_DOSEN VARCHAR(60),
    ALAMAT VARCHAR(40));";

$alterDosen = "ALTER TABLE dosen ADD NO_TELP VARCHAR(12) AFTER ALAMAT;";

if (mysqli_query($conn, $tDosen)) {
    echo "Table Dosen created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

if (mysqli_query($conn, $alterDosen)) {
    echo "Add table NO_TELP to Dosen success";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
// Membuat tabel matkul
$tMatkul = "CREATE TABLE Matkul (
    KD_MATKUL VARCHAR(5) PRIMARY KEY,
    NAMA_MATKUL VARCHAR(25),
    SKS VARCHAR(1));";

if (mysqli_query($conn, $tMatkul)) {
    echo "Table Matkul created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
