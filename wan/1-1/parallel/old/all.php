<html>
<head>

</head>
<title>all</title>
<body>

<h2>WAN all (<a href=../>../UP</a>)</h2>

<a href=all.png><img src=all.png></a>
<a href=all-net.png><img src=all-net.png></a>
<br />

<a href=all.eps>download all.eps</a>, 
<a href=all-net.eps>download all-net.eps</a>
<br />
<a href=all.tar>download all (all.png, all.dat, all.p)</a>
<br />

<a href=all.dat>all.dat (data file)</a>
<?php
$str = file_get_contents("all.dat");
echo "<pre>$str</pre>";
?>

<a href=all.dstat>all.dstat (network raw data file)</a>, 
<a href=all-net.dat>all-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("all.dstat");
echo "<pre>$str</pre>";
?>

<a href=all.log>all-r*.log (log files)</a>

<a href=all.net>all.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("all.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

