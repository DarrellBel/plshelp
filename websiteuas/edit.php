<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="coba.css">
    <?php
    include 'read_data.php';
  ?>
</head>
<body>
   
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
        <tbody id="userList"></tbody>
    </table>
    <style>
    button.edit-button {
        background-color: #4CAF50; /* Green color for Edit button */
        color: white;
    }

    button.delete-button {
        background-color: #f44336; /* Red color for Delete button */
        color: white;
    }
</style>

    <script>
        function registerUser() {
            var namaInput = document.getElementById("nama");
            var jurusanInput = document.getElementById("jurusan");
            var emailInput = document.getElementById("email");
            var passwordInput = document.getElementById("password");
            var jenisKelaminInput = document.getElementById("jenisKelamin");
            var tanggalLahirInput = document.getElementById("tanggalLahir");
            var umurInput = document.getElementById("umur");
            var alamatInput = document.getElementById("alamat");

            if (
                namaInput.value.trim() === "" ||
                jurusanInput.value.trim() === "" ||
                emailInput.value.trim() === "" ||
                passwordInput.value.trim() === "" ||
                jenisKelaminInput.value.trim() === "" ||
                tanggalLahirInput.value.trim() === "" ||
                umurInput.value.trim() === "" ||
                alamatInput.value.trim() === ""
            ) {
                alert("Please fill in all the fields.");
                return;
            }

            var users = JSON.parse(localStorage.getItem("users")) || [];

            var newUser = {
                nama: namaInput.value,
                jurusan: jurusanInput.value,
                email: emailInput.value,
                password: passwordInput.value,
                jenisKelamin: jenisKelaminInput.value,
                tanggalLahir: tanggalLahirInput.value,
                umur: umurInput.value,
                alamat: alamatInput.value
            };

            users.push(newUser);
            localStorage.setItem("users", JSON.stringify(users));

            updateRegisteredUsers();
            resetForm();
        }

        function updateRegisteredUsers() {
            var userList = document.getElementById("userList");
            userList.innerHTML = "";

            var users = JSON.parse(localStorage.getItem("users")) || [];

            users.forEach(function(user, index) {
                var row = userList.insertRow();
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                var cell4 = row.insertCell(3);
                var cell5 = row.insertCell(4);
                var cell6 = row.insertCell(5);
                var cell7 = row.insertCell(6);
                var cell8 = row.insertCell(7);
                var cell9 = row.insertCell(8);

                cell1.textContent = user.nama;
                cell2.textContent = user.jurusan;
                cell3.textContent = user.email;
                cell4.textContent = user.password;
                cell5.textContent = user.jenisKelamin;
                cell6.textContent = user.tanggalLahir;
                cell7.textContent = user.umur;
                cell8.textContent = user.alamat;

                // Add Edit and Delete buttons
                var editButton = document.createElement("button");
                editButton.textContent = "Edit";
                editButton.onclick = function() {
                    editUser(index);
                };

                var deleteButton = document.createElement("button");
                deleteButton.textContent = "Delete";
                deleteButton.onclick = function() {
                    deleteUser(index);
                };
                cell9.appendChild(editButton);
                cell9.appendChild(document.createTextNode("\u00A0\u00A0"));
                cell9.appendChild(deleteButton);
            });
        }

        function resetForm() {
            var registrationForm = document.getElementById("registrationForm");
            registrationForm.reset();
        }

        function editUser(index) {
            var users = JSON.parse(localStorage.getItem("users")) || [];

            // Prompt the user for new values
            var newNama = prompt("Enter the new name for " + users[index].nama);
            var newJurusan = prompt("Enter the new major for " + users[index].nama);
            var newEmail = prompt("Enter the new email for " + users[index].nama);
            var newPassword = prompt("Enter the new password for " + users[index].nama);
            var newJenisKelamin = prompt("Enter the new gender for " + users[index].nama);
            var newTanggalLahir = prompt("Enter the new date of birth for " + users[index].nama);
            var newUmur = prompt("Enter the new age for " + users[index].nama);
            var newAlamat = prompt("Enter the new address for " + users[index].nama);

            // Update the values if new values are provided
            if (
                newNama !== null && newNama.trim() !== "" &&
                newJurusan !== null && newJurusan.trim() !== "" &&
                newEmail !== null && newEmail.trim() !== "" &&
                newPassword !== null && newPassword.trim() !== "" &&
                newJenisKelamin !== null && newJenisKelamin.trim() !== "" &&
                newTanggalLahir !== null && newTanggalLahir.trim() !== "" &&
                newUmur !== null && newUmur.trim() !== "" &&
                newAlamat !== null && newAlamat.trim() !== ""
            ) {
                users[index].nama = newNama;
                users[index].jurusan = newJurusan;
                users[index].email = newEmail;
                users[index].password = newPassword;
                users[index].jenisKelamin = newJenisKelamin;
                users[index].tanggalLahir = newTanggalLahir;
                users[index].umur = newUmur;
                users[index].alamat = newAlamat;

                localStorage.setItem("users", JSON.stringify(users));
                updateRegisteredUsers();
            }
        }

        function deleteUser(index) {
            var users = JSON.parse(localStorage.getItem("users")) || [];

            // Confirm the deletion
            var confirmDelete = confirm("Are you sure you want to delete " + users[index].nama + "?");

            // If confirmed, delete the user
            if (confirmDelete) {
                users.splice(index, 1);
                localStorage.setItem("users", JSON.stringify(users));
                updateRegisteredUsers();
            }
        }

        // Initial update of the user list
        updateRegisteredUsers();
    </script>
</body>
</html>
