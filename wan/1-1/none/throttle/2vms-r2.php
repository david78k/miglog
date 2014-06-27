<html>
<head>

</head>
<title>2vms-r2</title>
<body>

<h2>WAN 2vms-r2 (<a href=../>../UP</a>)</h2>

<a href=2vms-r2.png><img src=2vms-r2.png></a>
<a href=2vms-r2-net.png><img src=2vms-r2-net.png></a>
<br />

<a href=2vms-r2.eps>download 2vms-r2.eps</a>, 
<a href=2vms-r2-net.eps>download 2vms-r2-net.eps</a>
<br />
<a href=2vms-r2.tar>download all (2vms-r2.png, 2vms-r2.dat, 2vms-r2.p)</a>
<br />

<a href=2vms-r2.dat>2vms-r2.dat (data file)</a>
<?php
$str = file_get_contents("2vms-r2.dat");
echo "<pre>$str</pre>";
?>

<a href=2vms-r2.dstat>2vms-r2.dstat (network raw data file)</a>, 
<a href=2vms-r2-net.dat>2vms-r2-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("2vms-r2.dstat");
echo "<pre>$str</pre>";
?>

<a href=2vms-r2.log>2vms-r2-r*.log (log files)</a>

<a href=2vms-r2.net>2vms-r2.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("2vms-r2.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

