<html>
<head>

</head>
<title>r2</title>
<body>

<h2>Single host controller AIMD r2 (<a href=../>../UP</a>)</h2>

<a href=r2.png><img src=r2.png></a>
<a href=r2.tiff><img src=r2.tiff></a>
<br />

<a href=r2.eps>download r2.eps</a>
<br />
<a href=r2.tar>download all (r2.png, r2.dat, r2.p)</a>
<br />

<a href=r2.dat>r2.dat (data file)</a>
<?php
$str = file_get_contents("r2.dat");
echo "<pre>$str</pre>";
?>

<a href=r2.dstat>r2.dstat (network data file)</a>
<?php
$str = file_get_contents("r2.dstat");
echo "<pre>$str</pre>";
?>

<a href=r2.p>r2.p (gnuplot script file)</a>
<?php $str = file_get_contents ("r2.p");
echo "<pre>$str</pre>";
?>

<a href=r2.log>r2-r*.log (log files)</a>

<a href=r2.net>r2.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("r2.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

