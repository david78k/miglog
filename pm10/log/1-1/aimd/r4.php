<html>
<head>

</head>
<title>r4</title>
<body>

<h2>Single host controller AIMD r4 (<a href=../>../UP</a>)</h2>

<a href=r4.png><img src=r4.png></a>
<a href=r4.tiff><img src=r4.tiff></a>
<br />

<a href=r4.eps>download r4.eps</a>
<br />
<a href=r4.tar>download all (r4.png, r4.dat, r4.p)</a>
<br />

<a href=r4.dat>r4.dat (data file)</a>
<?php
$str = file_get_contents("r4.dat");
echo "<pre>$str</pre>";
?>

<a href=r4.dstat>r4.dstat (network data file)</a>
<?php
$str = file_get_contents("r4.dstat");
echo "<pre>$str</pre>";
?>

<a href=r4.p>r4.p (gnuplot script file)</a>
<?php $str = file_get_contents ("r4.p");
echo "<pre>$str</pre>";
?>

<a href=r4.log>r4-r*.log (log files)</a>

<a href=r4.net>r4.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("r4.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

