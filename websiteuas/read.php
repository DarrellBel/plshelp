

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran Mahasiswa</title>
  <link rel="stylesheet" href="register.css">
  <?php
    include 'read_data.php';
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


    <h2>Data Mahasiswa</h2>
    <table id="userTable">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>Password</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="userList">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['nama']}</td>";
                echo "<td>{$row['jurusan']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "<td>{$row['password']}</td>";
                echo "<td>{$row['jenis_kelamin']}</td>";
                echo "<td>{$row['tanggal_lahir']}</td>";
                echo "<td>{$row['umur']}</td>";
                echo "<td>{$row['alamat']}</td>";
                echo "<td><a href='edit.php?id={$row['id']}'>Edit</a> | <a href='#' onclick='deleteUser({$row['id']})'>Delete</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <script>
    function deleteUser(id) {
        // Confirm the deletion
        var confirmDelete = confirm("Are you sure you want to delete this user?");

        // If confirmed, send the data to the server using AJAX for deletion
        if (confirmDelete) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "index.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Refresh halaman setelah penghapusan
                    window.location.reload();
                }
            };
            xhr.send("delete&id=" + id);
        }
    }
</script>
</body>
</html>
