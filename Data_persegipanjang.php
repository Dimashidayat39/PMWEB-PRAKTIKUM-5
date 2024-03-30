<?php
require_once './Class-persegipanjang.php';
$PP1 = new PersegiPanjang (20, 30);
echo 'Panjang = ' . $PP1->panjang;
echo 'Lebar = ' . $PP1->lebar;
echo '<br> Luas Objek Persegi Panjang :' . $PP1->luas();
echo '<br> keliling Objek Persegi Panjang :' . $PP1->keliling();

?>