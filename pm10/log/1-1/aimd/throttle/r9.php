<html>
<head>

</head>
<title>r9</title>
<body>

<h2>WAN r9 (<a href=../>../UP</a>)</h2>

<a href=r9.png><img src=r9.png></a>
<a href=r9-net.png><img src=r9-net.png></a>
<br />

<a href=r9.eps>download r9.eps</a>, 
<a href=r9-net.eps>download r9-net.eps</a>
<br />
<a href=r9.tar>download all (r9.png, r9.dat, r9.p)</a>
<br />

<a href=r9.dat>r9.dat (data file)</a>
<?php
$str = file_get_contents("r9.dat");
echo "<pre>$str</pre>";
?>

<a href=r9.dstat>r9.dstat (network raw data file)</a>, 
<a href=r9-net.dat>r9-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("r9.dstat");
echo "<pre>$str</pre>";
?>

<a href=r9.log>r9-r*.log (log files)</a>

<a href=r9.net>r9.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("r9.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

