# EasyBitcoinDark-PHP
A simple class for making calls to BitcoinDarks's API using PHP.

Getting Started
---------------
1. Include easybitcoinDark.php into your PHP script:

	`require_once('easybitcoinDark.php');`
2. Initialize BitcoinDark connection/object:

	`$bitcoinDark = new BitcoinDark('username','password');`<br>

	Optionally, you can specify a host, port. Default is HTTP on localhost port 14632.<br>
	`$bitcoinDark = new BitcoinDark('username','password','localhost','14632');`

	If you wish to make an SSL connection you can set an optional CA certificate or leave blank<br>
	`$bitcoinDark->setSSL('/full/path/to/mycertificate.cert');`

3. Make calls to bitcoind as methods for your object. Examples:

  `$bitcoinDark->getinfo();`
  
  `print_r($bitcoinDark);`
  `echo'<hr>';`
  `$balance = $bitcoinDark->{'response'}['result']['balance'];`
  
  `print_r($balance);`

