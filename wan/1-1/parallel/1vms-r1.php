<html>
<head>

</head>
<title>1vms-r1</title>
<body>

<h2>WAN 1vms-r1 (<a href=../>../UP</a>)</h2>

<a href=1vms-r1.png><img src=1vms-r1.png></a>
<a href=1vms-r1-net.png><img src=1vms-r1-net.png></a>
<br />

<a href=1vms-r1.eps>download 1vms-r1.eps</a>, 
<a href=1vms-r1-net.eps>download 1vms-r1-net.eps</a>
<br />
<a href=1vms-r1.tar>download all (1vms-r1.png, 1vms-r1.dat, 1vms-r1.p)</a>
<br />

<a href=1vms-r1.dat>1vms-r1.dat (data file)</a>
<?php
$str = file_get_contents("1vms-r1.dat");
echo "<pre>$str</pre>";
?>

<a href=1vms-r1.dstat>1vms-r1.dstat (network raw data file)</a>, 
<a href=1vms-r1-net.dat>1vms-r1-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("1vms-r1.dstat");
echo "<pre>$str</pre>";
?>

<a href=1vms-r1.log>1vms-r1-r*.log (log files)</a>

<a href=1vms-r1.net>1vms-r1.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("1vms-r1.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

