<html>
<head>

</head>
<title>controller</title>
<body>

<h2>WAN controller (<a href=../>../UP</a>)</h2>

<a href=controller.png><img src=controller.png></a>
<a href=controller-net.png><img src=controller-net.png></a>
<br />

<a href=controller.eps>download controller.eps</a>, 
<a href=controller-net.eps>download controller-net.eps</a>
<br />
<a href=controller.tar>download all (controller.png, controller.dat, controller.p)</a>
<br />

<a href=controller.dat>controller.dat (data file)</a>
<?php
$str = file_get_contents("controller.dat");
echo "<pre>$str</pre>";
?>

<a href=controller.dstat>controller.dstat (network raw data file)</a>, 
<a href=controller-net.dat>controller-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("controller.dstat");
echo "<pre>$str</pre>";
?>

<a href=controller.log>controller-r*.log (log files)</a>

<a href=controller.net>controller.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("controller.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

