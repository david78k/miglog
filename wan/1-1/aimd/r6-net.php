<html>
<head>

</head>
<title>r6-net</title>
<body>

<h2>Single host controller AIMD r6-net (<a href=../>../UP</a>)</h2>

<a href=r6-net.png><img src=r6-net.png></a>
<a href=r6-net.tiff><img src=r6-net.tiff></a>
<br />

<a href=r6-net.eps>download r6-net.eps</a>
<br />
<a href=r6-net.tar>download all (r6-net.png, r6-net.dat, r6-net.p)</a>
<br />

<a href=r6-net.dat>r6-net.dat (data file)</a>
<?php
$str = file_get_contents("r6-net.dat");
echo "<pre>$str</pre>";
?>

<a href=r6-net.dstat>r6-net.dstat (network data file)</a>
<?php
$str = file_get_contents("r6-net.dstat");
echo "<pre>$str</pre>";
?>

<a href=r6-net.p>r6-net.p (gnuplot script file)</a>
<?php $str = file_get_contents ("r6-net.p");
echo "<pre>$str</pre>";
?>

<a href=r6-net.log>r6-net-r*.log (log files)</a>

<a href=r6-net.net>r6-net.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("r6-net.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

