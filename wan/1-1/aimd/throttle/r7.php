<html>
<head>

</head>
<title>r7</title>
<body>

<h2>WAN r7 (<a href=../>../UP</a>)</h2>

<a href=r7.png><img src=r7.png></a>
<a href=r7-net.png><img src=r7-net.png></a>
<br />

<a href=r7.eps>download r7.eps</a>, 
<a href=r7-net.eps>download r7-net.eps</a>
<br />
<a href=r7.tar>download all (r7.png, r7.dat, r7.p)</a>
<br />

<a href=r7.dat>r7.dat (data file)</a>
<?php
$str = file_get_contents("r7.dat");
echo "<pre>$str</pre>";
?>

<a href=r7.dstat>r7.dstat (network raw data file)</a>, 
<a href=r7-net.dat>r7-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("r7.dstat");
echo "<pre>$str</pre>";
?>

<a href=r7.log>r7-r*.log (log files)</a>

<a href=r7.net>r7.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("r7.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

