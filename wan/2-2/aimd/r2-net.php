<html>
<head>

</head>
<title>r2-net</title>
<body>

<h2>Single host controller AIMD r2-net (<a href=../>../UP</a>)</h2>

<a href=r2-net.png><img src=r2-net.png></a>
<a href=r2-net.tiff><img src=r2-net.tiff></a>
<br />

<a href=r2-net.eps>download r2-net.eps</a>
<br />
<a href=r2-net.tar>download all (r2-net.png, r2-net.dat, r2-net.p)</a>
<br />

<a href=r2-net.dat>r2-net.dat (data file)</a>
<?php
$str = file_get_contents("r2-net.dat");
echo "<pre>$str</pre>";
?>

<a href=r2-net.dstat>r2-net.dstat (network data file)</a>
<?php
$str = file_get_contents("r2-net.dstat");
echo "<pre>$str</pre>";
?>

<a href=r2-net.p>r2-net.p (gnuplot script file)</a>
<?php $str = file_get_contents ("r2-net.p");
echo "<pre>$str</pre>";
?>

<a href=r2-net.log>r2-net-r*.log (log files)</a>

<a href=r2-net.net>r2-net.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("r2-net.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

