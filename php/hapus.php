<?php

// memulai sesi

session_start();

if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit;
}

require 'functions.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script>
            alert('Data Berhasil dihapus!');
            document.location.href = '../index.php';
            </script>";
} else {
    echo "<script>
            alert('Data Gagal dihapus!');
            document.location.href = '../index.php';
            </script>";
}
?>