<?php

include_once 'header.php';
?>
<div class="container p-3">
    <hr>
<?php
require_once "class_lingkaran.php";
    echo "NILAI PHI " . Lingkaran::PHI;
    $lingkar1 = new Lingkaran( 10 );
    $lingkar2 = new Lingkaran( 4 );
    echo "<br/>Luas Lingkaran I ".$lingkar1->getLuas();
    echo "<br>Luas Lingkaran II ".$lingkar2->getLuas();
    echo "<br>Keliling Lingkaran I ".$lingkar1->getKeliling();
    echo "<br>Keliling Lingkaran II ".$lingkar2->getKeliling();
?>
<hr>
</div>
<?php
include_once 'footer.php';
?>