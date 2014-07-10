<html>
<head>

</head>
<title>20vms-r3</title>
<body>

<h2>WAN 20vms-r3 (<a href=../>../UP</a>)</h2>

<a href=20vms-r3.png><img src=20vms-r3.png></a>
<a href=20vms-r3-net.png><img src=20vms-r3-net.png></a>
<br />

<a href=20vms-r3.eps>download 20vms-r3.eps</a>, 
<a href=20vms-r3-net.eps>download 20vms-r3-net.eps</a>
<br />
<a href=20vms-r3.tar>download all (20vms-r3.png, 20vms-r3.dat, 20vms-r3.p)</a>
<br />

<a href=20vms-r3.dat>20vms-r3.dat (data file)</a>
<?php
$str = file_get_contents("20vms-r3.dat");
echo "<pre>$str</pre>";
?>

<a href=20vms-r3.dstat>20vms-r3.dstat (network raw data file)</a>, 
<a href=20vms-r3-net.dat>20vms-r3-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("20vms-r3.dstat");
echo "<pre>$str</pre>";
?>

<a href=20vms-r3.log>20vms-r3-r*.log (log files)</a>

<a href=20vms-r3.net>20vms-r3.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("20vms-r3.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

