<html>
<head>

</head>
<title>8vms-r5</title>
<body>

<h2>WAN 8vms-r5 (<a href=../>../UP</a>)</h2>

<a href=8vms-r5.png><img src=8vms-r5.png></a>
<a href=8vms-r5-net.png><img src=8vms-r5-net.png></a>
<br />

<a href=8vms-r5.eps>download 8vms-r5.eps</a>, 
<a href=8vms-r5-net.eps>download 8vms-r5-net.eps</a>
<br />
<a href=8vms-r5.tar>download all (8vms-r5.png, 8vms-r5.dat, 8vms-r5.p)</a>
<br />

<a href=8vms-r5.dat>8vms-r5.dat (data file)</a>
<?php
$str = file_get_contents("8vms-r5.dat");
echo "<pre>$str</pre>";
?>

<a href=8vms-r5.dstat>8vms-r5.dstat (network raw data file)</a>, 
<a href=8vms-r5-net.dat>8vms-r5-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("8vms-r5.dstat");
echo "<pre>$str</pre>";
?>

<a href=8vms-r5.log>8vms-r5-r*.log (log files)</a>

<a href=8vms-r5.net>8vms-r5.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("8vms-r5.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

