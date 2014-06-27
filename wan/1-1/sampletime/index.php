<html>
<head>

</head>
<title>index</title>
<body>

<h2>WAN index (<a href=../>../UP</a>)</h2>
threshold 8, alpha 0.75: 30 seconds is the best (623.36sec), average 708.34
<br />
threshold 4, alpha 0.5: 45 seconds is the best (503.06sec), average 721.91
<br />
<a href=all.png><img src=all.png></a>
<a href=index-net.png><img src=index-net.png></a>
<br />

<a href=all.eps>download all.eps</a>, 
<a href=index-net.eps>download index-net.eps</a>
<br />
<a href=index.tar>download all (index.png, index.dat, index.p)</a>
<br />

<a href=all.dat>all.dat (data file)</a>
<?php
$str = file_get_contents("all.dat");
echo "<pre>$str</pre>";
?>

<a href=index.dstat>index.dstat (network raw data file)</a>, 
<a href=index-net.dat>index-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("index-net.dat");
echo "<pre>$str</pre>";
?>

<a href=index.log>index-r*.log (log files)</a>

<a href=index.net>index.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("index.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

