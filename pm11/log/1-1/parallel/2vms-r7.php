<html>
<head>

</head>
<title>2vms-r7</title>
<body>

<h2>WAN 2vms-r7 (<a href=../>../UP</a>)</h2>

<a href=2vms-r7.png><img src=2vms-r7.png></a>
<a href=2vms-r7-net.png><img src=2vms-r7-net.png></a>
<br />

<a href=2vms-r7.eps>download 2vms-r7.eps</a>, 
<a href=2vms-r7-net.eps>download 2vms-r7-net.eps</a>
<br />
<a href=2vms-r7.tar>download all (2vms-r7.png, 2vms-r7.dat, 2vms-r7.p)</a>
<br />

<a href=2vms-r7.dat>2vms-r7.dat (data file)</a>
<?php
$str = file_get_contents("2vms-r7.dat");
echo "<pre>$str</pre>";
?>

<a href=2vms-r7.dstat>2vms-r7.dstat (network raw data file)</a>, 
<a href=2vms-r7-net.dat>2vms-r7-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("2vms-r7.dstat");
echo "<pre>$str</pre>";
?>

<a href=2vms-r7.log>2vms-r7-r*.log (log files)</a>

<a href=2vms-r7.net>2vms-r7.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("2vms-r7.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>
