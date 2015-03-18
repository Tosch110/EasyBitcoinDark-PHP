# EasyBitcoinDark-PHP
A simple class for making calls to BitcoinDarks's API using PHP.

Create your Config
---------------

Create a BitcoinDark.conf here:<br>
<u>Windows</u><br>
C:\Users\yourUsername\AppData\Roaming\BitcoinDark\BitcoinDark.conf<br>
<u>Linux</u><br>
/home/yourUsername/.BitcoinDark/BitcoinDark.conf<br>
with the following content<br>
<b>(Do not forget to change user and pass)</b><br>
`rpcuser=user`<br>
`rpcpassword=pass`<br>
`rpcport=14632`<br>
`port=14631`<br>
`daemon=1`<br>
`gen=1`<br>
`server=1`<br>
`addnode=107.170.59.196`<br>
`addnode=146.185.188.6`<br>
`addnode=74.91.20.250:39997`<br>
`addnode=54.85.50.15:50288`<br>
`addnode=107.170.148.50:14631`<br>
`addnode=65.129.66.246:57762`<br>
`addnode=31.220.4.41`<br>
`addnode=98.226.66.65`<br>
`addnode=193.219.117.63`<br>
`addnode=62.210.141.204`<br>
`addnode=128.199.172.165`<br>
`addnode=192.99.143.114`<br>
`addnode=178.20.169.208`<br>
`addnode=195.34.100.2:42038`<br>
`addnode=5.101.107.239:60056`<br>
`addnode=ps00.bitcoindark.ca`<br>
`addnode=ps01.bitcoindark.ca`<br>
`addnode=ps02.bitcoindark.ca`<br>
`addnode=ps03.bitcoindark.ca`<br>
`addnode=ps04.bitcoindark.ca`<br>
`addnode=ps05.bitcoindark.ca`<br>
`addnode=ps06.bitcoindark.ca`<br>
`addnode=ps07.bitcoindark.ca`<br>
`addnode=ps08.bitcoindark.ca`<br>
`addnode=ps09.bitcoindark.ca`<br>
`addnode=ps10.bitcoindark.ca`<br>
`addnode=ps11.bitcoindark.ca`<br>
`addnode=ps12.bitcoindark.ca`<br>
`addnode=ps13.bitcoindark.ca`<br>
`addnode=ps14.bitcoindark.ca`<br>
`addnode=ps15.bitcoindark.ca`<br>
`addnode=ps16.bitcoindark.ca`<br>
`addnode=ps17.bitcoindark.ca`<br>
`addnode=ps18.bitcoindark.ca`<br>
`addnode=ps19.bitcoindark.ca`<br>
`addnode=ps20.bitcoindark.ca`<br>
`addnode=107.170.59.196`<br>
`addnode=146.185.188.6`<br>
`addnode=74.91.20.250:39997`<br>
`addnode=54.85.50.15:50288`<br>
`addnode=107.170.148.50:14631`<br>
`addnode=65.129.66.246:57762`<br>
`addnode=31.220.4.41`<br>
`addnode=107.170.44.31`<br>
`addnode=101.103.54.206:51222`<br>
`addnode=120.148.149.13:54338`<br>
`addnode=184.100.114.11:63310`<br>

Getting Started
---------------
1. Include easybitcoinDark.php into your PHP script:

	`require_once('easyBitcoinDark.php');`
2. Initialize BitcoinDark connection/object:

	`$bitcoinDark = new BitcoinDark('username','password');`<br>

	Optionally, you can specify a host, port. Default is HTTP on localhost port 14632.<br>
	`$bitcoinDark = new BitcoinDark('username','password','localhost','14632');`

	If you wish to make an SSL connection you can set an optional CA certificate or leave blank<br>
	`$bitcoinDark->setSSL('/full/path/to/mycertificate.cert');`

3. Make calls to bitcoind as methods for your object. Examples:

  `$bitcoinDark->getinfo();`<br>
  
  `print_r($bitcoinDark);`<br>
  `echo'<hr>';`<br>
  `$balance = $bitcoinDark->{'response'}['result']['balance'];`<br>
  
  `print_r($balance);`

Donations are welcome: 

Opal: ocNCgPiYpETqEKteAfBbJrtzxApryGP5A5
