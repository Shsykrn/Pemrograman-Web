<?php

include 'Connection.php';

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

$query = "INSERT INTO siswa(NIS, NAMA_LENGKAP, ALAMAT, KELAS, JURUSAN) VALUES ('" . $nis . "','" . $nama . "','" . $alamat . "','" . $kelas . "','" . $jurusan . "')";

mysqli_query($connection, $query);
echo '<script>alert("Data berhasil masuk");
window.location="Form-page.php";
</script>';

mysqli_close($connection);