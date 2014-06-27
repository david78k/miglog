<html>
<head>

</head>
<title>1-1 WAN no controller</title>
<body>

<h2>Single host 1-1 in WAN no controller (<a href=../>../UP</a>)</h2>

<a href=throttle>throttle</a>

<h3>1. <a href=125/>No-limit (125MB/s) 40VMs</a></h3>
[Left] 6VMs: 6x6+4, 484.64sec, 297VMs/hour
<br />
[Center] 7VMs: 7x5+5, 419.92sec, 342.9VMs/hour
<br />
[Right] 8VMs: 8x5, 459.40sec, 313.4VMs/hour
<br />
<a href=6vms-r1.php><img src=6vms-r1.png height="230" width="300"></a> 
<a href=7vms-r1.php><img src=7vms-r1.png height="230" width="300"></a> 
<a href=8vms-r1.php><img src=8vms-r1.png height="230" width="300"></a> 
<a href=6vms-r1-net.php><img src=6vms-r1-net.png height="150" width="300"></a> 
<a href=7vms-r1-net.php><img src=7vms-r1-net.png height="150" width="300"></a> 
<a href=8vms-r1-net.php><img src=8vms-r1-net.png height="150" width="300"></a> 

<h3>2. <a href=throttle>40VMs with low bandwidth 40MB/s limit</a></h3>
mild congestion: 40MB/s
<br />
severe congestion: 10MB/s
<br />
total time = sec
<br />
average throughput = VMs/hour
<br />
VMs = 8VMs 
<br />
<a href=../none/>compare with none-controller</a>
<br />
<a href=throttle/8vms-r1.php><img src=throttle/8vms-r1.png height="300" width="400"></a> 
<a href=throttle/8vms-r2.php><img src=throttle/8vms-r2.png height="300" width="400"></a> 
<a href=to40/r3-net.php><img src=to40/r3-net.png height="200" width="400"></a> 
<a href=6vms.php><img src=6vms.png height="200" width="400"></a> 
<br />

<h3>3. 40VMs with throttling down to 40MB/s limit at 3th period around 200sec</h3>
<br />
