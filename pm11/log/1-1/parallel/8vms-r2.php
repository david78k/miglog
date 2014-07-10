<html>
<head>

</head>
<title>8vms-r2</title>
<body>

<h2>WAN 8vms-r2 (<a href=../>../UP</a>)</h2>

<a href=8vms-r2.png><img src=8vms-r2.png></a>
<a href=8vms-r2-net.png><img src=8vms-r2-net.png></a>
<br />

<a href=8vms-r2.eps>download 8vms-r2.eps</a>, 
<a href=8vms-r2-net.eps>download 8vms-r2-net.eps</a>
<br />
<a href=8vms-r2.tar>download all (8vms-r2.png, 8vms-r2.dat, 8vms-r2.p)</a>
<br />

<a href=8vms-r2.dat>8vms-r2.dat (data file)</a>
<?php
$str = file_get_contents("8vms-r2.dat");
echo "<pre>$str</pre>";
?>

<a href=8vms-r2.dstat>8vms-r2.dstat (network raw data file)</a>, 
<a href=8vms-r2-net.dat>8vms-r2-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("8vms-r2.dstat");
echo "<pre>$str</pre>";
?>

<a href=8vms-r2.log>8vms-r2-r*.log (log files)</a>

<a href=8vms-r2.net>8vms-r2.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("8vms-r2.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

