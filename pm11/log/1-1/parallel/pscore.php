<html>
<head>

</head>
<title>pscore</title>
<body>

<h2>WAN pscore (<a href=../>../UP</a>)</h2>

<a href=pscore.png><img src=pscore.png></a>
<a href=pscore-net.png><img src=pscore-net.png></a>
<br />

<a href=pscore.eps>download pscore.eps</a>, 
<a href=pscore-net.eps>download pscore-net.eps</a>
<br />
<a href=pscore.tar>download all (pscore.png, pscore.dat, pscore.p)</a>
<br />

<a href=pscore.dat>pscore.dat (data file)</a>
<?php
$str = file_get_contents("pscore.dat");
echo "<pre>$str</pre>";
?>

<a href=pscore.dstat>pscore.dstat (network raw data file)</a>, 
<a href=pscore-net.dat>pscore-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("pscore.dstat");
echo "<pre>$str</pre>";
?>

<a href=pscore.log>pscore-r*.log (log files)</a>

<a href=pscore.net>pscore.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("pscore.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

