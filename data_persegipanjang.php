<?php

include_once 'header.php';
?>
<div class="container p-3">
    <hr>
<?php
require_once "class_persegipanjang.php";
    $pp1 = new PersegiPanjang( 10, 9 );
    $pp2 = new PersegiPanjang( 4, 7 );
    echo "<br/>Luas Persegi Panjang I ".$pp1->getLuas();
    echo "<br>Luas Persegi Panjang II ".$pp2->getLuas();
    echo "<br>Keliling Persegi Panjang I ".$pp1->getKeliling();
    echo "<br>Keliling Persegi Panjang II ".$pp2->getKeliling();
?>
<hr>
</div>
<?php
include_once 'footer.php';
?>