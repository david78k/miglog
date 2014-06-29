<html>
<head>

</head>
<title>r3-net</title>
<body>

<h2>Single host controller AIMD r3-net (<a href=../>../UP</a>)</h2>

<a href=r3-net.png><img src=r3-net.png></a>
<a href=r3-net.tiff><img src=r3-net.tiff></a>
<br />

<a href=r3-net.eps>download r3-net.eps</a>
<br />
<a href=r3-net.tar>download all (r3-net.png, r3-net.dat, r3-net.p)</a>
<br />

<a href=r3-net.dat>r3-net.dat (data file)</a>
<?php
$str = file_get_contents("r3-net.dat");
echo "<pre>$str</pre>";
?>

<a href=r3-net.dstat>r3-net.dstat (network data file)</a>
<?php
$str = file_get_contents("r3-net.dstat");
echo "<pre>$str</pre>";
?>

<a href=r3-net.p>r3-net.p (gnuplot script file)</a>
<?php $str = file_get_contents ("r3-net.p");
echo "<pre>$str</pre>";
?>

<a href=r3-net.log>r3-net-r*.log (log files)</a>

<a href=r3-net.net>r3-net.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("r3-net.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

