<html>
<head>

</head>
<title>4vms-r5</title>
<body>

<h2>WAN 4vms-r5 (<a href=../>../UP</a>)</h2>

<a href=4vms-r5.png><img src=4vms-r5.png></a>
<a href=4vms-r5-net.png><img src=4vms-r5-net.png></a>
<br />

<a href=4vms-r5.eps>download 4vms-r5.eps</a>, 
<a href=4vms-r5-net.eps>download 4vms-r5-net.eps</a>
<br />
<a href=4vms-r5.tar>download all (4vms-r5.png, 4vms-r5.dat, 4vms-r5.p)</a>
<br />

<a href=4vms-r5.dat>4vms-r5.dat (data file)</a>
<?php
$str = file_get_contents("4vms-r5.dat");
echo "<pre>$str</pre>";
?>

<a href=4vms-r5.dstat>4vms-r5.dstat (network raw data file)</a>, 
<a href=4vms-r5-net.dat>4vms-r5-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("4vms-r5.dstat");
echo "<pre>$str</pre>";
?>

<a href=4vms-r5.log>4vms-r5-r*.log (log files)</a>

<a href=4vms-r5.net>4vms-r5.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("4vms-r5.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

