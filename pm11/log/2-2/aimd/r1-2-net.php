<html>
<head>

</head>
<title>r1-2-net</title>
<body>

<h2>Single host controller AIMD r1-2-net (<a href=../>../UP</a>)</h2>

<a href=r1-2-net.png><img src=r1-2-net.png></a>
<a href=r1-2-net.tiff><img src=r1-2-net.tiff></a>
<br />

<a href=r1-2-net.eps>download r1-2-net.eps</a>
<br />
<a href=r1-2-net.tar>download all (r1-2-net.png, r1-2-net.dat, r1-2-net.p)</a>
<br />

<a href=r1-2-net.dat>r1-2-net.dat (data file)</a>
<?php
$str = file_get_contents("r1-2-net.dat");
echo "<pre>$str</pre>";
?>

<a href=r1-2-net.dstat>r1-2-net.dstat (network data file)</a>
<?php
$str = file_get_contents("r1-2-net.dstat");
echo "<pre>$str</pre>";
?>

<a href=r1-2-net.p>r1-2-net.p (gnuplot script file)</a>
<?php $str = file_get_contents ("r1-2-net.p");
echo "<pre>$str</pre>";
?>

<a href=r1-2-net.log>r1-2-net-r*.log (log files)</a>

<a href=r1-2-net.net>r1-2-net.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("r1-2-net.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>
