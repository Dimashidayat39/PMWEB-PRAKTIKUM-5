<?php

require_once './classlingkaran.php';

echo "nilai PHI : ".Lingkaran ::PHI;

$lingkaran1 = new Lingkaran(10);
$lingkaran2 = new Lingkaran(7);

echo "<br>Luas object lingkaran 1" . $lingkaran1->getLuas();
echo "<br>Luas object lingkaran 2" . $lingkaran2->getLuas();

echo "<br>Keliling object lingkaran 1" . $lingkaran1->getkeliling
();
echo "<br>Keliling object lingkaran 2" . $lingkaran2->getkeliling
();

?>