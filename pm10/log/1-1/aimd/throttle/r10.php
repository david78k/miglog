<html>
<head>

</head>
<title>r10</title>
<body>

<h2>WAN r10 (<a href=../>../UP</a>)</h2>

<a href=r10.png><img src=r10.png></a>
<a href=r10-net.png><img src=r10-net.png></a>
<br />

<a href=r10.eps>download r10.eps</a>, 
<a href=r10-net.eps>download r10-net.eps</a>
<br />
<a href=r10.tar>download all (r10.png, r10.dat, r10.p)</a>
<br />

<a href=r10.dat>r10.dat (data file)</a>
<?php
$str = file_get_contents("r10.dat");
echo "<pre>$str</pre>";
?>

<a href=r10.dstat>r10.dstat (network raw data file)</a>, 
<a href=r10-net.dat>r10-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("r10.dstat");
echo "<pre>$str</pre>";
?>

<a href=r10.log>r10-r*.log (log files)</a>

<a href=r10.net>r10.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("r10.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

