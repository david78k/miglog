<html>
<head>

</head>
<title>6vms-r8</title>
<body>

<h2>WAN 6vms-r8 (<a href=../>../UP</a>)</h2>

<a href=6vms-r8.png><img src=6vms-r8.png></a>
<a href=6vms-r8-net.png><img src=6vms-r8-net.png></a>
<br />

<a href=6vms-r8.eps>download 6vms-r8.eps</a>, 
<a href=6vms-r8-net.eps>download 6vms-r8-net.eps</a>
<br />
<a href=6vms-r8.tar>download all (6vms-r8.png, 6vms-r8.dat, 6vms-r8.p)</a>
<br />

<a href=6vms-r8.dat>6vms-r8.dat (data file)</a>
<?php
$str = file_get_contents("6vms-r8.dat");
echo "<pre>$str</pre>";
?>

<a href=6vms-r8.dstat>6vms-r8.dstat (network raw data file)</a>, 
<a href=6vms-r8-net.dat>6vms-r8-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("6vms-r8.dstat");
echo "<pre>$str</pre>";
?>

<a href=6vms-r8.log>6vms-r8-r*.log (log files)</a>

<a href=6vms-r8.net>6vms-r8.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("6vms-r8.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

