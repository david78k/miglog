<html>
<head>

</head>
<title>8vms-r10</title>
<body>

<h2>WAN 8vms-r10 (<a href=../>../UP</a>)</h2>

<a href=8vms-r10.png><img src=8vms-r10.png></a>
<a href=8vms-r10-net.png><img src=8vms-r10-net.png></a>
<br />

<a href=8vms-r10.eps>download 8vms-r10.eps</a>, 
<a href=8vms-r10-net.eps>download 8vms-r10-net.eps</a>
<br />
<a href=8vms-r10.tar>download all (8vms-r10.png, 8vms-r10.dat, 8vms-r10.p)</a>
<br />

<a href=8vms-r10.dat>8vms-r10.dat (data file)</a>
<?php
$str = file_get_contents("8vms-r10.dat");
echo "<pre>$str</pre>";
?>

<a href=8vms-r10.dstat>8vms-r10.dstat (network raw data file)</a>, 
<a href=8vms-r10-net.dat>8vms-r10-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("8vms-r10.dstat");
echo "<pre>$str</pre>";
?>

<a href=8vms-r10.log>8vms-r10-r*.log (log files)</a>

<a href=8vms-r10.net>8vms-r10.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("8vms-r10.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

