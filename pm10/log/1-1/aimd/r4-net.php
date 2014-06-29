<html>
<head>

</head>
<title>r4-net</title>
<body>

<h2>Single host controller AIMD r4-net (<a href=../>../UP</a>)</h2>

<a href=r4-net.png><img src=r4-net.png></a>
<a href=r4-net.tiff><img src=r4-net.tiff></a>
<br />

<a href=r4-net.eps>download r4-net.eps</a>
<br />
<a href=r4-net.tar>download all (r4-net.png, r4-net.dat, r4-net.p)</a>
<br />

<a href=r4-net.dat>r4-net.dat (data file)</a>
<?php
$str = file_get_contents("r4-net.dat");
echo "<pre>$str</pre>";
?>

<a href=r4-net.dstat>r4-net.dstat (network data file)</a>
<?php
$str = file_get_contents("r4-net.dstat");
echo "<pre>$str</pre>";
?>

<a href=r4-net.p>r4-net.p (gnuplot script file)</a>
<?php $str = file_get_contents ("r4-net.p");
echo "<pre>$str</pre>";
?>

<a href=r4-net.log>r4-net-r*.log (log files)</a>

<a href=r4-net.net>r4-net.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("r4-net.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

