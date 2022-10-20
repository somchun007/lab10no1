<?php
    $a = $_GET["mango"];
    $b = $_GET["orange"];
    $c = $_GET["banana"];
	echo "<b>ยอดขาย</b>  ";
    echo ($a*30) + ($b*70) + ($c*30);
    echo " <b>บาท</b>"
?>
<br>
<b>ยอดขาย <?=($a*30) + ($b*70) + ($c*30)?> บาท</b>