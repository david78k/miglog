<html>
<head>

</head>
<title>r11-net</title>
<body>

<h2>Single host controller AIMD r11-net (<a href=../>../UP</a>)</h2>

<a href=r11-net.png><img src=r11-net.png></a>
<a href=r11-net.tiff><img src=r11-net.tiff></a>
<br />

<a href=r11-net.eps>download r11-net.eps</a>
<br />
<a href=r11-net.tar>download all (r11-net.png, r11-net.dat, r11-net.p)</a>
<br />

<a href=r11-net.dat>r11-net.dat (data file)</a>
<?php
$str = file_get_contents("r11-net.dat");
echo "<pre>$str</pre>";
?>

<a href=r11-net.dstat>r11-net.dstat (network data file)</a>
<?php
$str = file_get_contents("r11-net.dstat");
echo "<pre>$str</pre>";
?>

<a href=r11-net.p>r11-net.p (gnuplot script file)</a>
<?php $str = file_get_contents ("r11-net.p");
echo "<pre>$str</pre>";
?>

<a href=r11-net.log>r11-net-r*.log (log files)</a>

<a href=r11-net.net>r11-net.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("r11-net.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

