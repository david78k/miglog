<html>
<head>

</head>
<title>9vms-r2-net</title>
<body>

<h2>Single host controller AIMD 9vms-r2-net (<a href=../>../UP</a>)</h2>

<a href=9vms-r2-net.png><img src=9vms-r2-net.png></a>
<a href=9vms-r2-net.tiff><img src=9vms-r2-net.tiff></a>
<br />

<a href=9vms-r2-net.eps>download 9vms-r2-net.eps</a>
<br />
<a href=9vms-r2-net.tar>download all (9vms-r2-net.png, 9vms-r2-net.dat, 9vms-r2-net.p)</a>
<br />

<a href=9vms-r2-net.dat>9vms-r2-net.dat (data file)</a>
<?php
$str = file_get_contents("9vms-r2-net.dat");
echo "<pre>$str</pre>";
?>

<a href=9vms-r2-net.dstat>9vms-r2-net.dstat (network data file)</a>
<?php
$str = file_get_contents("9vms-r2-net.dstat");
echo "<pre>$str</pre>";
?>

<a href=9vms-r2-net.p>9vms-r2-net.p (gnuplot script file)</a>
<?php $str = file_get_contents ("9vms-r2-net.p");
echo "<pre>$str</pre>";
?>

<a href=9vms-r2-net.log>9vms-r2-net-r*.log (log files)</a>

<a href=9vms-r2-net.net>9vms-r2-net.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("9vms-r2-net.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>
