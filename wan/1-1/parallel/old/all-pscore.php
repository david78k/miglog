<html>
<head>

</head>
<title>all-pscore</title>
<body>

<h2>WAN all-pscore (<a href=../>../UP</a>)</h2>

<a href=all-pscore.png><img src=all-pscore.png></a>
<a href=all-pscore-net.png><img src=all-pscore-net.png></a>
<br />

<a href=all-pscore.eps>download all-pscore.eps</a>, 
<a href=all-pscore-net.eps>download all-pscore-net.eps</a>
<br />
<a href=all-pscore.tar>download all (all-pscore.png, all-pscore.dat, all-pscore.p)</a>
<br />

<a href=all-pscore.dat>all-pscore.dat (data file)</a>
<?php
$str = file_get_contents("all-pscore.dat");
echo "<pre>$str</pre>";
?>

<a href=all-pscore.dstat>all-pscore.dstat (network raw data file)</a>, 
<a href=all-pscore-net.dat>all-pscore-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("all-pscore.dstat");
echo "<pre>$str</pre>";
?>

<a href=all-pscore.log>all-pscore-r*.log (log files)</a>

<a href=all-pscore.net>all-pscore.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("all-pscore.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

