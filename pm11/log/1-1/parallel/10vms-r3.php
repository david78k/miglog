<html>
<head>

</head>
<title>10vms-r3</title>
<body>

<h2>WAN 10vms-r3 (<a href=../>../UP</a>)</h2>

<a href=10vms-r3.png><img src=10vms-r3.png></a>
<a href=10vms-r3-net.png><img src=10vms-r3-net.png></a>
<br />

<a href=10vms-r3.eps>download 10vms-r3.eps</a>, 
<a href=10vms-r3-net.eps>download 10vms-r3-net.eps</a>
<br />
<a href=10vms-r3.tar>download all (10vms-r3.png, 10vms-r3.dat, 10vms-r3.p)</a>
<br />

<a href=10vms-r3.dat>10vms-r3.dat (data file)</a>
<?php
$str = file_get_contents("10vms-r3.dat");
echo "<pre>$str</pre>";
?>

<a href=10vms-r3.dstat>10vms-r3.dstat (network raw data file)</a>, 
<a href=10vms-r3-net.dat>10vms-r3-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("10vms-r3.dstat");
echo "<pre>$str</pre>";
?>

<a href=10vms-r3.log>10vms-r3-r*.log (log files)</a>

<a href=10vms-r3.net>10vms-r3.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("10vms-r3.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>
