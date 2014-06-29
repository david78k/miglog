<html>
<head>

</head>
<title>r3</title>
<body>

<h2>WAN r3 (<a href=../>../UP</a>)</h2>

<a href=r3.png><img src=r3.png></a>
<a href=r3-net.png><img src=r3-net.png></a>
<br />

<a href=r3.eps>download r3.eps</a>, 
<a href=r3-net.eps>download r3-net.eps</a>
<br />
<a href=r3.tar>download all (r3.png, r3.dat, r3.p)</a>
<br />

<a href=r3.dat>r3.dat (data file)</a>
<?php
$str = file_get_contents("r3.dat");
echo "<pre>$str</pre>";
?>

<a href=r3.dstat>r3.dstat (network raw data file)</a>, 
<a href=r3-net.dat>r3-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("r3.dstat");
echo "<pre>$str</pre>";
?>

<a href=r3.log>r3-r*.log (log files)</a>

<a href=r3.net>r3.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("r3.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

