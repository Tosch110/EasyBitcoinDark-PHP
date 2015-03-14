<?php
require_once('easyBitcoinDark.php');
 
$bitcoinDark = new BitcoinDark('user','pass');

$bitcoinDark->getinfo();

print_r($bitcoinDark);
echo'<hr>';
$balance = $bitcoinDark->{'response'}['result']['balance'];

print_r($balance);
?>
