<html>
<head>

</head>
<title>10vms-r10</title>
<body>

<h2>WAN 10vms-r10 (<a href=../>../UP</a>)</h2>

<a href=10vms-r10.png><img src=10vms-r10.png></a>
<a href=10vms-r10-net.png><img src=10vms-r10-net.png></a>
<br />

<a href=10vms-r10.eps>download 10vms-r10.eps</a>, 
<a href=10vms-r10-net.eps>download 10vms-r10-net.eps</a>
<br />
<a href=10vms-r10.tar>download all (10vms-r10.png, 10vms-r10.dat, 10vms-r10.p)</a>
<br />

<a href=10vms-r10.dat>10vms-r10.dat (data file)</a>
<?php
$str = file_get_contents("10vms-r10.dat");
echo "<pre>$str</pre>";
?>

<a href=10vms-r10.dstat>10vms-r10.dstat (network raw data file)</a>, 
<a href=10vms-r10-net.dat>10vms-r10-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("10vms-r10.dstat");
echo "<pre>$str</pre>";
?>

<a href=10vms-r10.log>10vms-r10-r*.log (log files)</a>

<a href=10vms-r10.net>10vms-r10.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("10vms-r10.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

