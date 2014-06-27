<html>
<head>

</head>
<title>4vms-r9</title>
<body>

<h2>WAN 4vms-r9 (<a href=../>../UP</a>)</h2>

<a href=4vms-r9.png><img src=4vms-r9.png></a>
<a href=4vms-r9-net.png><img src=4vms-r9-net.png></a>
<br />

<a href=4vms-r9.eps>download 4vms-r9.eps</a>, 
<a href=4vms-r9-net.eps>download 4vms-r9-net.eps</a>
<br />
<a href=4vms-r9.tar>download all (4vms-r9.png, 4vms-r9.dat, 4vms-r9.p)</a>
<br />

<a href=4vms-r9.dat>4vms-r9.dat (data file)</a>
<?php
$str = file_get_contents("4vms-r9.dat");
echo "<pre>$str</pre>";
?>

<a href=4vms-r9.dstat>4vms-r9.dstat (network raw data file)</a>, 
<a href=4vms-r9-net.dat>4vms-r9-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("4vms-r9.dstat");
echo "<pre>$str</pre>";
?>

<a href=4vms-r9.log>4vms-r9-r*.log (log files)</a>

<a href=4vms-r9.net>4vms-r9.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("4vms-r9.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

