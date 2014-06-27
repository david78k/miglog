<html>
<head>

</head>
<title>r8-net</title>
<body>

<h2>Single host controller AIMD r8-net (<a href=../>../UP</a>)</h2>

<a href=r8-net.png><img src=r8-net.png></a>
<a href=r8-net.tiff><img src=r8-net.tiff></a>
<br />

<a href=r8-net.eps>download r8-net.eps</a>
<br />
<a href=r8-net.tar>download all (r8-net.png, r8-net.dat, r8-net.p)</a>
<br />

<a href=r8-net.dat>r8-net.dat (data file)</a>
<?php
$str = file_get_contents("r8-net.dat");
echo "<pre>$str</pre>";
?>

<a href=r8-net.dstat>r8-net.dstat (network data file)</a>
<?php
$str = file_get_contents("r8-net.dstat");
echo "<pre>$str</pre>";
?>

<a href=r8-net.p>r8-net.p (gnuplot script file)</a>
<?php $str = file_get_contents ("r8-net.p");
echo "<pre>$str</pre>";
?>

<a href=r8-net.log>r8-net-r*.log (log files)</a>

<a href=r8-net.net>r8-net.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("r8-net.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

