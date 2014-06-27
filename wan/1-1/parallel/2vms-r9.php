<html>
<head>

</head>
<title>2vms-r9</title>
<body>

<h2>WAN 2vms-r9 (<a href=../>../UP</a>)</h2>

<a href=2vms-r9.png><img src=2vms-r9.png></a>
<a href=2vms-r9-net.png><img src=2vms-r9-net.png></a>
<br />

<a href=2vms-r9.eps>download 2vms-r9.eps</a>, 
<a href=2vms-r9-net.eps>download 2vms-r9-net.eps</a>
<br />
<a href=2vms-r9.tar>download all (2vms-r9.png, 2vms-r9.dat, 2vms-r9.p)</a>
<br />

<a href=2vms-r9.dat>2vms-r9.dat (data file)</a>
<?php
$str = file_get_contents("2vms-r9.dat");
echo "<pre>$str</pre>";
?>

<a href=2vms-r9.dstat>2vms-r9.dstat (network raw data file)</a>, 
<a href=2vms-r9-net.dat>2vms-r9-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("2vms-r9.dstat");
echo "<pre>$str</pre>";
?>

<a href=2vms-r9.log>2vms-r9-r*.log (log files)</a>

<a href=2vms-r9.net>2vms-r9.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("2vms-r9.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

