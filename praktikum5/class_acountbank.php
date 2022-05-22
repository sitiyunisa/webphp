<?php

require_once 'class_acount.php';
$ac1 = new accountBank("C001", "Ahamd", 6000000);
$ac1->nabung(1000000);

$ac2 = new accountBank("C002", "ahmad",500000);
$ac2->transfer(1500000);

$ac3 = new accountBank("C002", "Budi", 5350000);
$ac3->tarik(2500000);
?>



