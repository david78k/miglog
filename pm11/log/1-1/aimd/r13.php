<html>
<head>

</head>
<title>r13</title>
<body>

<h2>Single host controller AIMD r13 (<a href=../>../UP</a>)</h2>

<a href=r13.png><img src=r13.png></a>
<a href=r13.tiff><img src=r13.tiff></a>
<br />

<a href=r13.eps>download r13.eps</a>
<br />
<a href=r13.tar>download all (r13.png, r13.dat, r13.p)</a>
<br />

<a href=r13.dat>r13.dat (data file)</a>
<?php
$str = file_get_contents("r13.dat");
echo "<pre>$str</pre>";
?>

<a href=r13.dstat>r13.dstat (network data file)</a>
<?php
$str = file_get_contents("r13.dstat");
echo "<pre>$str</pre>";
?>

<a href=r13.p>r13.p (gnuplot script file)</a>
<?php $str = file_get_contents ("r13.p");
echo "<pre>$str</pre>";
?>

<a href=r13.log>r13-r*.log (log files)</a>

<a href=r13.net>r13.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("r13.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

