<html>
<head>

</head>
<title>r8</title>
<body>

<h2>Single host controller AIMD r8 (<a href=../>../UP</a>)</h2>

<a href=r8.png><img src=r8.png></a>
<a href=r8.tiff><img src=r8.tiff></a>
<br />

<a href=r8.eps>download r8.eps</a>
<br />
<a href=r8.tar>download all (r8.png, r8.dat, r8.p)</a>
<br />

<a href=r8.dat>r8.dat (data file)</a>
<?php
$str = file_get_contents("r8.dat");
echo "<pre>$str</pre>";
?>

<a href=r8.dstat>r8.dstat (network data file)</a>
<?php
$str = file_get_contents("r8.dstat");
echo "<pre>$str</pre>";
?>

<a href=r8.p>r8.p (gnuplot script file)</a>
<?php $str = file_get_contents ("r8.p");
echo "<pre>$str</pre>";
?>

<a href=r8.log>r8-r*.log (log files)</a>

<a href=r8.net>r8.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("r8.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

