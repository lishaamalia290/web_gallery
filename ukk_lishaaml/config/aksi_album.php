<?php
session_start();
include 'koneksi.php';

if (isset($_POST['tambah'])) {
    $namaalbum = $_POST['namaalbum'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = date('Y-m-d');
    $userid = $_SESSION['userid'];

    $sql = mysqli_query($koneksi, "insert into album values('','$namaalbum','$deskripsi','$tanggal','$userid')");

    echo "<script>
        alert('Data berhasil disimpan!');
        location.href='../admin/album.php';
    </script>";
}


if (isset($_POST['edit'])) {
    $albumid = $_POST['albumid'];
    $namaalbum = $_POST['namaalbum'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = date('Y-m-d');
    $userid = $_SESSION['userid'];

    $sql = mysqli_query($koneksi, "UPDATE album SET namaalbum='$namaalbum', deskripsi='$deskripsi', tanggaldibuat='tanggal'");

    echo "<script>
        alert('Data berhasil disimpan!');
        location.href='../admin/album.php';
    </script>";
}

?>
