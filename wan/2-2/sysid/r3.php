<html>
<head>

</head>
<title>r3</title>
<body>

<h2>Single host controller AIMD r3 (<a href=../>../UP</a>)</h2>

<a href=r3.png><img src=r3.png></a>
<a href=r3.tiff><img src=r3.tiff></a>
<br />

<a href=r3.eps>download r3.eps</a>
<br />
<a href=r3.tar>download all (r3.png, r3.dat, r3.p)</a>
<br />

<a href=r3.dat>r3.dat (data file)</a>
<?php
$str = file_get_contents("r3.dat");
echo "<pre>$str</pre>";
?>

<a href=r3.dstat>r3.dstat (network data file)</a>
<?php
$str = file_get_contents("r3.dstat");
echo "<pre>$str</pre>";
?>

<a href=r3.p>r3.p (gnuplot script file)</a>
<?php $str = file_get_contents ("r3.p");
echo "<pre>$str</pre>";
?>

<a href=r3.log>r3-r*.log (log files)</a>

<a href=r3.net>r3.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("r3.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

