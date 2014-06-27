<html>
<head>

</head>
<title>1vms-r5</title>
<body>

<h2>WAN 1vms-r5 (<a href=../>../UP</a>)</h2>

<a href=1vms-r5.png><img src=1vms-r5.png></a>
<a href=1vms-r5-net.png><img src=1vms-r5-net.png></a>
<br />

<a href=1vms-r5.eps>download 1vms-r5.eps</a>, 
<a href=1vms-r5-net.eps>download 1vms-r5-net.eps</a>
<br />
<a href=1vms-r5.tar>download all (1vms-r5.png, 1vms-r5.dat, 1vms-r5.p)</a>
<br />

<a href=1vms-r5.dat>1vms-r5.dat (data file)</a>
<?php
$str = file_get_contents("1vms-r5.dat");
echo "<pre>$str</pre>";
?>

<a href=1vms-r5.dstat>1vms-r5.dstat (network raw data file)</a>, 
<a href=1vms-r5-net.dat>1vms-r5-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("1vms-r5.dstat");
echo "<pre>$str</pre>";
?>

<a href=1vms-r5.log>1vms-r5-r*.log (log files)</a>

<a href=1vms-r5.net>1vms-r5.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("1vms-r5.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

