<html>
<head>

</head>
<title>1-1 WAN AIMD</title>
<body>

<h2>Single host 1-1 in WAN AIMD (<a href=../>../UP</a>)</h2>

<h3>1. <a href=125/>No-limit (125MB/s) with slow start</a></h3>
[Left, high bandwidth] 89VMs Starting from 1VMs: 1-2-4-8-9-10-5-6-7-3-4-5-6-3-4-5-2-3-2VMs, 1428.54sec, 236VMs/hour
<br />
[Center, low bandwidth] 64VMs Starting from 1VM: 1-2-4-8-9-4-5-6-3-4-5-6-7VMs, 3143.47sec (52m23s), 73VMs/hour
<br />
[Right, low bandwidth or cpu high] 60VMs: 1-2-1-2-3-4-2-3-1-2-3-4-5-6-7-3-4-5-2VMs, 2327.55sec, 64.9VMs/hour
<br />
<a href=r1.php><img src=r1.png height="230" width="300"></a> 
<a href=r2.php><img src=r2.png height="230" width="300"></a> 
<a href=r3.php><img src=r3.png height="230" width="300"></a> 
<br />
<a href=r1-net.php><img src=r1-net.png height="150" width="300"></a> 
<a href=r2-net.php><img src=r2-net.png height="150" width="300"></a> 
<a href=r3-net.php><img src=r3-net.png height="150" width="300"></a> 

<h3>2. No limit with slow start and AIMD for 40VMs</h3>
total time = 457.55 sec
<br />
average throughput = 314.71 VMs/hour
<br />
VMs = 1-2-4-8-9-10-5-1
<br />
<a href=../none/>compare with none-controller</a>
<br />
<a href=r6.php><img src=r6.png height="300" width="400"></a> 
<a href=r6-net.php><img src=r6-net.png height="300" width="400"></a> 
<a href=to40/r3-net.php><img src=to40/r3-net.png height="200" width="400"></a> 
<a href=6vms.php><img src=6vms.png height="200" width="400"></a> 
<br />
<h3>3. 40VMs with 170ms delay throttling down to 40MB/s limit at 4th period around 250sec</h3>
<br />

