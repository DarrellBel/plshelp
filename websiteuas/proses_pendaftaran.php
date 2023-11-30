<?php
include 'koneksi.php';
if(isset($_POST['proses'])){
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $tanggallahir = $_POST['tanggallahir'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];

    // Hitung umur secara otomatis
    $dobDate = new DateTime($tanggallahir);
    $today = new DateTime();
    $umur = $today->diff($dobDate)->y;

    $query = $conn->query("INSERT INTO mahasiswa (nama, jurusan, email, password, jeniskelamin, tanggallahir, umur, alamat) VALUES ('$nama', '$jurusan','$email','$password','$jeniskelamin','$tanggallahir','$umur','$alamat')");

    if ($query) {
        header('Location: edit.php');
    } else {
        echo "Gagal menambah data";
    }
    
}
?>