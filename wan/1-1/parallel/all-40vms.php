<html>
<head>

</head>
<title>all-40vms</title>
<body>

<h2>WAN simulation all-40vms (<a href=../>../UP</a>)</h2>

<a href=all-40vms.png><img src=all-40vms.png></a>
<a href=all-40vms-detail.png><img src=all-40vms-detail.png></a>
<a href=all-40vms-net.png><img src=all-40vms-net.png></a>
<br />

<a href=all-40vms.eps>download all-40vms.eps</a>, 
<a href=all-40vms.emf>download all-40vms.emf</a>,
<a href=all-40vms-net.eps>download all-40vms-net.eps</a>
<br />
<a href=all-40vms.tar>download all (all-40vms.png, all-40vms.dat, all-40vms.p)</a>
<br />

<a href=all-40vms.dat>all-40vms.dat (data file)</a>
<?php
$str = file_get_contents("all-40vms.dat");
echo "<pre>$str</pre>";
?>

<a href=all-40vms.dstat>all-40vms.dstat (network raw data file)</a>, 
<a href=all-40vms-net.dat>all-40vms-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("all-40vms.dstat");
echo "<pre>$str</pre>";
?>

<a href=all-40vms.log>all-40vms-r*.log (log files)</a>

<a href=all-40vms.net>all-40vms.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("all-40vms.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

