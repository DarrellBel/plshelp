<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran Mahasiswa</title>
  <link rel="stylesheet" href="register.css">
  <?php
    include 'proses_pendaftaran.php';
  ?>
</head>
<body>

  <div class="sidebar">
    <header class="logo">
      <img src="https://openclipart.org/image/2400px/svg_to_png/8051/ryanlerch-Book-and-Pen.png" alt="MAHASISWA Logo">
      <span>MAHASISWA</span>
  

    </header>
    <ul>
      <span></span>
      <li><a href="index.html"><i class="fas fa-qrcode"></i>Beranda</a></li>
      <li><a href="#"><i class="fas fa-qrcode"></i>Pendaftaran</a></li>
      <li><a href="#"><i class="fas fa-link"></i>Daftar Mahasiswa</a></li>
      <li><a href="#"><i class="fas fa-stream"></i>Tentang Kami</a></li>
    </ul>
  </div>

  <h2>Form Pendaftaran</h2>

  <!-- Registration Form -->
  <form action="" method="post">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required><br>

    <label for="jurusan">Jurusan:</label>
    <select id="jurusan" name="jurusan" required>
      <option value="accountant">Akuntansi</option>
      <option value="software_engineering">Rekayasa Perangkat Lunak</option>
    </select><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <label for="jeniskelamin">Jenis Kelamin:</label>
    <select id="jeniskelamin" name="jeniskelamin" required>
      <option value="male">Pria</option>
      <option value="female">Wanita</option>
      <option value="other">Lainnya</option>
    </select><br>

    <label for="tanggallahir">Tanggal Lahir:</label>
        <input type="date" id="tanggallahir" name="tanggallahir" onchange="calculateAge()" required><br>

        <label for="umur">Umur:</label>
        <input type="number" id="umur" name="umur" readonly><br>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" required></textarea><br>

        <button type="submit" name="proses">Daftar</button>
    </form>

    <script>
        function calculateAge() {
            var dob = document.getElementById('tanggallahir').value;
            var dobDate = new Date(dob);
            var today = new Date();
            var age = today.getFullYear() - dobDate.getFullYear();

            // Check if the birthday has occurred this year
            if (today.getMonth() < dobDate.getMonth() || 
                (today.getMonth() === dobDate.getMonth() && today.getDate() < dobDate.getDate())) {
                age--;
            }

            document.getElementById('umur').value = age;
        }
    </script>




</body>
</html>
