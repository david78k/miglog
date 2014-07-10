<html>
<head>

</head>
<title>r13-net</title>
<body>

<h2>Single host controller AIMD r13-net (<a href=../>../UP</a>)</h2>

<a href=r13-net.png><img src=r13-net.png></a>
<a href=r13-net.tiff><img src=r13-net.tiff></a>
<br />

<a href=r13-net.eps>download r13-net.eps</a>
<br />
<a href=r13-net.tar>download all (r13-net.png, r13-net.dat, r13-net.p)</a>
<br />

<a href=r13-net.dat>r13-net.dat (data file)</a>
<?php
$str = file_get_contents("r13-net.dat");
echo "<pre>$str</pre>";
?>

<a href=r13-net.dstat>r13-net.dstat (network data file)</a>
<?php
$str = file_get_contents("r13-net.dstat");
echo "<pre>$str</pre>";
?>

<a href=r13-net.p>r13-net.p (gnuplot script file)</a>
<?php $str = file_get_contents ("r13-net.p");
echo "<pre>$str</pre>";
?>

<a href=r13-net.log>r13-net-r*.log (log files)</a>

<a href=r13-net.net>r13-net.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("r13-net.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

