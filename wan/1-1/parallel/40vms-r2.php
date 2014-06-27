<html>
<head>

</head>
<title>40vms-r2</title>
<body>

<h2>WAN 40vms-r2 (<a href=../>../UP</a>)</h2>

<a href=40vms-r2.png><img src=40vms-r2.png></a>
<a href=40vms-r2-net.png><img src=40vms-r2-net.png></a>
<br />

<a href=40vms-r2.eps>download 40vms-r2.eps</a>, 
<a href=40vms-r2-net.eps>download 40vms-r2-net.eps</a>
<br />
<a href=40vms-r2.tar>download all (40vms-r2.png, 40vms-r2.dat, 40vms-r2.p)</a>
<br />

<a href=40vms-r2.dat>40vms-r2.dat (data file)</a>
<?php
$str = file_get_contents("40vms-r2.dat");
echo "<pre>$str</pre>";
?>

<a href=40vms-r2.dstat>40vms-r2.dstat (network raw data file)</a>, 
<a href=40vms-r2-net.dat>40vms-r2-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("40vms-r2.dstat");
echo "<pre>$str</pre>";
?>

<a href=40vms-r2.log>40vms-r2-r*.log (log files)</a>

<a href=40vms-r2.net>40vms-r2.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("40vms-r2.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

