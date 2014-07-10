<html>
<head>

</head>
<title>20vms-r5</title>
<body>

<h2>WAN 20vms-r5 (<a href=../>../UP</a>)</h2>

<a href=20vms-r5.png><img src=20vms-r5.png></a>
<a href=20vms-r5-net.png><img src=20vms-r5-net.png></a>
<br />

<a href=20vms-r5.eps>download 20vms-r5.eps</a>, 
<a href=20vms-r5-net.eps>download 20vms-r5-net.eps</a>
<br />
<a href=20vms-r5.tar>download all (20vms-r5.png, 20vms-r5.dat, 20vms-r5.p)</a>
<br />

<a href=20vms-r5.dat>20vms-r5.dat (data file)</a>
<?php
$str = file_get_contents("20vms-r5.dat");
echo "<pre>$str</pre>";
?>

<a href=20vms-r5.dstat>20vms-r5.dstat (network raw data file)</a>, 
<a href=20vms-r5-net.dat>20vms-r5-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("20vms-r5.dstat");
echo "<pre>$str</pre>";
?>

<a href=20vms-r5.log>20vms-r5-r*.log (log files)</a>

<a href=20vms-r5.net>20vms-r5.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("20vms-r5.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

