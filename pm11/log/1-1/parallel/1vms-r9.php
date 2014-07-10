<html>
<head>

</head>
<title>1vms-r9</title>
<body>

<h2>WAN 1vms-r9 (<a href=../>../UP</a>)</h2>

<a href=1vms-r9.png><img src=1vms-r9.png></a>
<a href=1vms-r9-net.png><img src=1vms-r9-net.png></a>
<br />

<a href=1vms-r9.eps>download 1vms-r9.eps</a>, 
<a href=1vms-r9-net.eps>download 1vms-r9-net.eps</a>
<br />
<a href=1vms-r9.tar>download all (1vms-r9.png, 1vms-r9.dat, 1vms-r9.p)</a>
<br />

<a href=1vms-r9.dat>1vms-r9.dat (data file)</a>
<?php
$str = file_get_contents("1vms-r9.dat");
echo "<pre>$str</pre>";
?>

<a href=1vms-r9.dstat>1vms-r9.dstat (network raw data file)</a>, 
<a href=1vms-r9-net.dat>1vms-r9-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("1vms-r9.dstat");
echo "<pre>$str</pre>";
?>

<a href=1vms-r9.log>1vms-r9-r*.log (log files)</a>

<a href=1vms-r9.net>1vms-r9.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("1vms-r9.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

