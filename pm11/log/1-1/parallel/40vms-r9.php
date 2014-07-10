<html>
<head>

</head>
<title>40vms-r9</title>
<body>

<h2>WAN 40vms-r9 (<a href=../>../UP</a>)</h2>

<a href=40vms-r9.png><img src=40vms-r9.png></a>
<a href=40vms-r9-net.png><img src=40vms-r9-net.png></a>
<br />

<a href=40vms-r9.eps>download 40vms-r9.eps</a>, 
<a href=40vms-r9-net.eps>download 40vms-r9-net.eps</a>
<br />
<a href=40vms-r9.tar>download all (40vms-r9.png, 40vms-r9.dat, 40vms-r9.p)</a>
<br />

<a href=40vms-r9.dat>40vms-r9.dat (data file)</a>
<?php
$str = file_get_contents("40vms-r9.dat");
echo "<pre>$str</pre>";
?>

<a href=40vms-r9.dstat>40vms-r9.dstat (network raw data file)</a>, 
<a href=40vms-r9-net.dat>40vms-r9-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("40vms-r9.dstat");
echo "<pre>$str</pre>";
?>

<a href=40vms-r9.log>40vms-r9-r*.log (log files)</a>

<a href=40vms-r9.net>40vms-r9.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("40vms-r9.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

