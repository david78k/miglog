<html>
<head>

</head>
<title>10vms-r6</title>
<body>

<h2>WAN 10vms-r6 (<a href=../>../UP</a>)</h2>

<a href=10vms-r6.png><img src=10vms-r6.png></a>
<a href=10vms-r6-net.png><img src=10vms-r6-net.png></a>
<br />

<a href=10vms-r6.eps>download 10vms-r6.eps</a>, 
<a href=10vms-r6-net.eps>download 10vms-r6-net.eps</a>
<br />
<a href=10vms-r6.tar>download all (10vms-r6.png, 10vms-r6.dat, 10vms-r6.p)</a>
<br />

<a href=10vms-r6.dat>10vms-r6.dat (data file)</a>
<?php
$str = file_get_contents("10vms-r6.dat");
echo "<pre>$str</pre>";
?>

<a href=10vms-r6.dstat>10vms-r6.dstat (network raw data file)</a>, 
<a href=10vms-r6-net.dat>10vms-r6-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("10vms-r6.dstat");
echo "<pre>$str</pre>";
?>

<a href=10vms-r6.log>10vms-r6-r*.log (log files)</a>

<a href=10vms-r6.net>10vms-r6.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("10vms-r6.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

