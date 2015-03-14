<?php
require_once('easyBitcoinDark.php');
 
$bitcoinDark = new BitcoinDark('user','pass'); //Enter user and pass from your config file here

$bitcoinDark->getinfo();

print_r($bitcoinDark);
echo'<hr>';
$balance = $bitcoinDark->{'response'}['result']['balance'];

print_r($balance);
?>
