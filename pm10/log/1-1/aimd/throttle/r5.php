<html>
<head>

</head>
<title>r5</title>
<body>

<h2>WAN r5 (<a href=../>../UP</a>)</h2>

<a href=r5.png><img src=r5.png></a>
<a href=r5-net.png><img src=r5-net.png></a>
<br />

<a href=r5.eps>download r5.eps</a>, 
<a href=r5-net.eps>download r5-net.eps</a>
<br />
<a href=r5.tar>download all (r5.png, r5.dat, r5.p)</a>
<br />

<a href=r5.dat>r5.dat (data file)</a>
<?php
$str = file_get_contents("r5.dat");
echo "<pre>$str</pre>";
?>

<a href=r5.dstat>r5.dstat (network raw data file)</a>, 
<a href=r5-net.dat>r5-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("r5.dstat");
echo "<pre>$str</pre>";
?>

<a href=r5.log>r5-r*.log (log files)</a>

<a href=r5.net>r5.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("r5.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

