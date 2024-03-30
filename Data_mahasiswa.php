<?php

require_once './class_mahasiswa.php';

$faiz = new Mahasiswa('02011', 'faiz fikri');
$alissa = new Mahasiswa('02012', 'alissa khairunissa');
$rose = new Mahasiswa('01011', 'rosaline naurah');
$defi = new Mahasiswa('01012', 'defghi muhammad');

$faiz->prodi = 'TI';
$faiz->thn_angkatan = '2012';
$faiz->ipk = '3.8';

$alissa->prodi = 'TI';
$alissa->thn_angkatan = '2012';
$alissa->ipk = '2.9';

$rose->prodi = 'TI';
$rose->thn_angkatan = '2011';
$rose->ipk = '3.0';

$defi->prodi = 'TI';
$defi->thn_angkatan = '2011';
$defi->ipk = '1.2';

echo $faiz->nama;
echo "<br>" . $faiz->nim;
echo "<br>" . $faiz->prodi;
echo "<br>" . $faiz->thn_angkatan;
?>