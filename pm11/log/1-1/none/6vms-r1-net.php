<html>
<head>

</head>
<title>6vms-r1-net</title>
<body>

<h2>Single host controller AIMD 6vms-r1-net (<a href=../>../UP</a>)</h2>

<a href=6vms-r1-net.png><img src=6vms-r1-net.png></a>
<a href=6vms-r1-net.tiff><img src=6vms-r1-net.tiff></a>
<br />

<a href=6vms-r1-net.eps>download 6vms-r1-net.eps</a>
<br />
<a href=6vms-r1-net.tar>download all (6vms-r1-net.png, 6vms-r1-net.dat, 6vms-r1-net.p)</a>
<br />

<a href=6vms-r1-net.dat>6vms-r1-net.dat (data file)</a>
<?php
$str = file_get_contents("6vms-r1-net.dat");
echo "<pre>$str</pre>";
?>

<a href=6vms-r1-net.dstat>6vms-r1-net.dstat (network data file)</a>
<?php
$str = file_get_contents("6vms-r1-net.dstat");
echo "<pre>$str</pre>";
?>

<a href=6vms-r1-net.p>6vms-r1-net.p (gnuplot script file)</a>
<?php $str = file_get_contents ("6vms-r1-net.p");
echo "<pre>$str</pre>";
?>

<a href=6vms-r1-net.log>6vms-r1-net-r*.log (log files)</a>

<a href=6vms-r1-net.net>6vms-r1-net.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("6vms-r1-net.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

