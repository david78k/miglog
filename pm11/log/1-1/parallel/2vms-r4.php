<html>
<head>

</head>
<title>2vms-r4</title>
<body>

<h2>WAN 2vms-r4 (<a href=../>../UP</a>)</h2>

<a href=2vms-r4.png><img src=2vms-r4.png></a>
<a href=2vms-r4-net.png><img src=2vms-r4-net.png></a>
<br />

<a href=2vms-r4.eps>download 2vms-r4.eps</a>, 
<a href=2vms-r4-net.eps>download 2vms-r4-net.eps</a>
<br />
<a href=2vms-r4.tar>download all (2vms-r4.png, 2vms-r4.dat, 2vms-r4.p)</a>
<br />

<a href=2vms-r4.dat>2vms-r4.dat (data file)</a>
<?php
$str = file_get_contents("2vms-r4.dat");
echo "<pre>$str</pre>";
?>

<a href=2vms-r4.dstat>2vms-r4.dstat (network raw data file)</a>, 
<a href=2vms-r4-net.dat>2vms-r4-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("2vms-r4.dstat");
echo "<pre>$str</pre>";
?>

<a href=2vms-r4.log>2vms-r4-r*.log (log files)</a>

<a href=2vms-r4.net>2vms-r4.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("2vms-r4.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

