<?php
require_once 'Mangga.php';
require_once 'FruitDatabase.php';

// Membuat instance pertama dari kelas Mango
$mangoFarm = new Mangga();

// Membuat tabel mangga
$mangoFarm->createTable();

// Menambahkan data mangga
$mangoFarm->tambahMangga("Manis", "Harumanis", "Bulat");
$mangoFarm->tambahMangga("Asam", "Gedong", "Lonjong");

// Mengambil dan menampilkan data mangga
echo "Data Mangga:<br>";
$mangoFarm->ambilMangga();

// Menghapus data mangga
$mangoFarm->hapusMangga(1);

// Menampilkan data mangga setelah dihapus
echo "<br>Data Mangga Setelah Penghapusan:<br>";
$mangoFarm->ambilMangga();

// Panggil beberapa kali dan var_dump
echo "<br>Var_dump dari instance pertama:<br>";
var_dump($mangoFarm);

// Buat instance baru dari kelas Mango
$mangoFarm2 = new Mangga();

// Panggil var_dump untuk instance kedua
echo "<br>Var_dump dari instance kedua:<br>";
var_dump($mangoFarm2);

// Anda dapat melihat bahwa keduanya mengacu pada objek yang sama (singleton) karena instance kedua tidak dibuat ulang.
?>
