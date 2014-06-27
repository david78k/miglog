<html>
<head>

</head>
<title>8vms-r1-net</title>
<body>

<h2>Single host controller AIMD 8vms-r1-net (<a href=../>../UP</a>)</h2>

<a href=8vms-r1-net.png><img src=8vms-r1-net.png></a>
<a href=8vms-r1-net.tiff><img src=8vms-r1-net.tiff></a>
<br />

<a href=8vms-r1-net.eps>download 8vms-r1-net.eps</a>
<br />
<a href=8vms-r1-net.tar>download all (8vms-r1-net.png, 8vms-r1-net.dat, 8vms-r1-net.p)</a>
<br />

<a href=8vms-r1-net.dat>8vms-r1-net.dat (data file)</a>
<?php
$str = file_get_contents("8vms-r1-net.dat");
echo "<pre>$str</pre>";
?>

<a href=8vms-r1-net.dstat>8vms-r1-net.dstat (network data file)</a>
<?php
$str = file_get_contents("8vms-r1-net.dstat");
echo "<pre>$str</pre>";
?>

<a href=8vms-r1-net.p>8vms-r1-net.p (gnuplot script file)</a>
<?php $str = file_get_contents ("8vms-r1-net.p");
echo "<pre>$str</pre>";
?>

<a href=8vms-r1-net.log>8vms-r1-net-r*.log (log files)</a>

<a href=8vms-r1-net.net>8vms-r1-net.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("8vms-r1-net.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

