<html>
<head>

</head>
<title>r11</title>
<body>

<h2>Single host controller AIMD r11 (<a href=../>../UP</a>)</h2>

<a href=r11.png><img src=r11.png></a>
<a href=r11.tiff><img src=r11.tiff></a>
<br />

<a href=r11.eps>download r11.eps</a>
<br />
<a href=r11.tar>download all (r11.png, r11.dat, r11.p)</a>
<br />

<a href=r11.dat>r11.dat (data file)</a>
<?php
$str = file_get_contents("r11.dat");
echo "<pre>$str</pre>";
?>

<a href=r11.dstat>r11.dstat (network data file)</a>
<?php
$str = file_get_contents("r11.dstat");
echo "<pre>$str</pre>";
?>

<a href=r11.p>r11.p (gnuplot script file)</a>
<?php $str = file_get_contents ("r11.p");
echo "<pre>$str</pre>";
?>

<a href=r11.log>r11-r*.log (log files)</a>

<a href=r11.net>r11.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("r11.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

