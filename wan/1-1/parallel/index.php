<html>
<head>

</head>
<title>index</title>
<body>

<h2>WAN index (<a href=../>../UP</a>)</h2>

<a href=all.png><img src=all.png width=400></a>
<a href=controller.php><img src=controller.png width=400></a>
<br />
<a href=all-pscore.php><img src=all-pscore.png width=400></a>
<a href=pscore.php><img src=pscore.png width=400></a>
<br />
<a href=all-40vms.php><img src=index-net.png></a>
<br />

<a href=all.eps>download all.eps</a>, 
<a href=index-net.eps>download index-net.eps</a>
<br />
<a href=index.tar>download all (index.png, index.dat, index.p)</a>
<br />

<a href=all.dat>all.dat (data file)</a>
<?php
$str = file_get_contents("all.dat");
echo "<pre>$str</pre>";
?>

<a href=index.dstat>index.dstat (network raw data file)</a>, 
<a href=all-40vms.dat>all-40vms.dat</a>
<?php
$str = file_get_contents("all-40vms.dat");
echo "<pre>$str</pre>";
?>

<a href=index.log>index-r*.log (log files)</a>

<a href=index.net>index.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("index.dstat");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

