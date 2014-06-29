<html>
<head>

</head>
<title>7vms-r1</title>
<body>

<h2>WAN 7vms-r1 (<a href=../>../UP</a>)</h2>

<a href=7vms-r1.png><img src=7vms-r1.png></a>
<a href=7vms-r1-net.png><img src=7vms-r1-net.png></a>
<br />

<a href=7vms-r1.eps>download 7vms-r1.eps</a>, 
<a href=7vms-r1-net.eps>download 7vms-r1-net.eps</a>
<br />
<a href=7vms-r1.tar>download all (7vms-r1.png, 7vms-r1.dat, 7vms-r1.p)</a>
<br />

<a href=7vms-r1.dat>7vms-r1.dat (data file)</a>
<?php
$str = file_get_contents("7vms-r1.dat");
echo "<pre>$str</pre>";
?>

<a href=7vms-r1.dstat>7vms-r1.dstat (network raw data file)</a>, 
<a href=7vms-r1-net.dat>7vms-r1-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("7vms-r1.dstat");
echo "<pre>$str</pre>";
?>

<a href=7vms-r1.log>7vms-r1-r*.log (log files)</a>

<a href=7vms-r1.net>7vms-r1.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("7vms-r1.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

