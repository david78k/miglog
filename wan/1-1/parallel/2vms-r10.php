<html>
<head>

</head>
<title>2vms-r10</title>
<body>

<h2>WAN 2vms-r10 (<a href=../>../UP</a>)</h2>

<a href=2vms-r10.png><img src=2vms-r10.png></a>
<a href=2vms-r10-net.png><img src=2vms-r10-net.png></a>
<br />

<a href=2vms-r10.eps>download 2vms-r10.eps</a>, 
<a href=2vms-r10-net.eps>download 2vms-r10-net.eps</a>
<br />
<a href=2vms-r10.tar>download all (2vms-r10.png, 2vms-r10.dat, 2vms-r10.p)</a>
<br />

<a href=2vms-r10.dat>2vms-r10.dat (data file)</a>
<?php
$str = file_get_contents("2vms-r10.dat");
echo "<pre>$str</pre>";
?>

<a href=2vms-r10.dstat>2vms-r10.dstat (network raw data file)</a>, 
<a href=2vms-r10-net.dat>2vms-r10-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("2vms-r10.dstat");
echo "<pre>$str</pre>";
?>

<a href=2vms-r10.log>2vms-r10-r*.log (log files)</a>

<a href=2vms-r10.net>2vms-r10.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("2vms-r10.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

