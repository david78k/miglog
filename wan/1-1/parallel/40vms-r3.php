<html>
<head>

</head>
<title>40vms-r3</title>
<body>

<h2>WAN 40vms-r3 (<a href=../>../UP</a>)</h2>

<a href=40vms-r3.png><img src=40vms-r3.png></a>
<a href=40vms-r3-net.png><img src=40vms-r3-net.png></a>
<br />

<a href=40vms-r3.eps>download 40vms-r3.eps</a>, 
<a href=40vms-r3-net.eps>download 40vms-r3-net.eps</a>
<br />
<a href=40vms-r3.tar>download all (40vms-r3.png, 40vms-r3.dat, 40vms-r3.p)</a>
<br />

<a href=40vms-r3.dat>40vms-r3.dat (data file)</a>
<?php
$str = file_get_contents("40vms-r3.dat");
echo "<pre>$str</pre>";
?>

<a href=40vms-r3.dstat>40vms-r3.dstat (network raw data file)</a>, 
<a href=40vms-r3-net.dat>40vms-r3-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("40vms-r3.dstat");
echo "<pre>$str</pre>";
?>

<a href=40vms-r3.log>40vms-r3-r*.log (log files)</a>

<a href=40vms-r3.net>40vms-r3.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("40vms-r3.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>
