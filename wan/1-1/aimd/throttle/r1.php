<html>
<head>

</head>
<title>r1</title>
<body>

<h2>WAN r1 (<a href=../>../UP</a>)</h2>

<a href=r1.png><img src=r1.png></a>
<a href=r1-net.png><img src=r1-net.png></a>
<br />

<a href=r1.eps>download r1.eps</a>, 
<a href=r1-net.eps>download r1-net.eps</a>
<br />
<a href=r1.tar>download all (r1.png, r1.dat, r1.p)</a>
<br />

<a href=r1.dat>r1.dat (data file)</a>
<?php
$str = file_get_contents("r1.dat");
echo "<pre>$str</pre>";
?>

<a href=r1.dstat>r1.dstat (network raw data file)</a>, 
<a href=r1-net.dat>r1-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("r1.dstat");
echo "<pre>$str</pre>";
?>

<a href=r1.log>r1-r*.log (log files)</a>

<a href=r1.net>r1.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("r1.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

