<html>
<head>

</head>
<title>index</title>
<body>

<h2>WAN index (<a href=../>../UP</a>)</h2>

<a href=index.png><img src=index.png></a>
<a href=index-net.png><img src=index-net.png></a>
<br />

<a href=index.eps>download index.eps</a>, 
<a href=index-net.eps>download index-net.eps</a>
<br />
<a href=index.tar>download all (index.png, index.dat, index.p)</a>
<br />

<a href=index.dat>index.dat (data file)</a>
<?php
$str = file_get_contents("index.dat");
echo "<pre>$str</pre>";
?>

<a href=index.dstat>index.dstat (network raw data file)</a>, 
<a href=index-net.dat>index-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("index.dstat");
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

