<html>
<head>

</head>
<title>r6</title>
<body>

<h2>Single host controller AIMD r6 (<a href=../>../UP</a>)</h2>

<a href=r6.png><img src=r6.png></a>
<a href=r6.tiff><img src=r6.tiff></a>
<br />

<a href=r6.eps>download r6.eps</a>
<br />
<a href=r6.tar>download all (r6.png, r6.dat, r6.p)</a>
<br />

<a href=r6.dat>r6.dat (data file)</a>
<?php
$str = file_get_contents("r6.dat");
echo "<pre>$str</pre>";
?>

<a href=r6.dstat>r6.dstat (network data file)</a>
<?php
$str = file_get_contents("r6.dstat");
echo "<pre>$str</pre>";
?>

<a href=r6.p>r6.p (gnuplot script file)</a>
<?php $str = file_get_contents ("r6.p");
echo "<pre>$str</pre>";
?>

<a href=r6.log>r6-r*.log (log files)</a>

<a href=r6.net>r6.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("r6.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

