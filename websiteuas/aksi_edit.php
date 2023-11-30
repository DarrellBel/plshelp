<?php
include 'koneksi.php';


    if(isset($_POST['edit'])){
        $id = $_POST['id'];
        $newNama = $_POST['newNama'];
        $newJurusan = $_POST['newJurusan'];
        $newEmail = $_POST['newEmail'];
        $newPassword = $_POST['newPassword'];
        $newJenisKelamin = $_POST['newJenisKelamin'];
        $newTanggalLahir = $_POST['newTanggalLahir'];
        $newUmur = $_POST['newUmur'];
        $newAlamat = $_POST['newAlamat'];
    
      
        $query = "SELECT * from mahasiswa order by id desc";
        $result = mysqli_query($koneksi, $query);
    
        // Tampilkan data dalam formulir untuk diedit
        $row = mysqli_fetch_assoc($result);
    }
    
    if ($query) {
        header('Location: edit.php');
    } else {
        echo "Gagal menambah data";
    }
    

?>