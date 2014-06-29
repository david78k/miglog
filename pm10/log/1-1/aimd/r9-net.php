<html>
<head>

</head>
<title>r9-net</title>
<body>

<h2>Single host controller AIMD r9-net (<a href=../>../UP</a>)</h2>

<a href=r9-net.png><img src=r9-net.png></a>
<a href=r9-net.tiff><img src=r9-net.tiff></a>
<br />

<a href=r9-net.eps>download r9-net.eps</a>
<br />
<a href=r9-net.tar>download all (r9-net.png, r9-net.dat, r9-net.p)</a>
<br />

<a href=r9-net.dat>r9-net.dat (data file)</a>
<?php
$str = file_get_contents("r9-net.dat");
echo "<pre>$str</pre>";
?>

<a href=r9-net.dstat>r9-net.dstat (network data file)</a>
<?php
$str = file_get_contents("r9-net.dstat");
echo "<pre>$str</pre>";
?>

<a href=r9-net.p>r9-net.p (gnuplot script file)</a>
<?php $str = file_get_contents ("r9-net.p");
echo "<pre>$str</pre>";
?>

<a href=r9-net.log>r9-net-r*.log (log files)</a>

<a href=r9-net.net>r9-net.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("r9-net.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

