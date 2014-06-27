<html>
<head>

</head>
<title>1-1 WAN AIMD throttle</title>
<body>

<h2>Single host 1-1 in WAN AIMD throttled (<a href=../>../UP</a>)</h2>

<h3>1. <a href=125/>40MB/s with 40Ms</a></h3>
[Left, high bandwidth] Starting from 6VMs: 6-7-8-4-5-6-4VMs, 428.54sec, 336VMs/hour
<br />
[Center, low bandwidth] Starting from 1VM: 1-2-3-4-5-2-3-4-5-6-3-2VMs, 605.60sec, 237VMs/hour
<br />
[Right,wrong] Starting from 1VM: 1-2-3-4-5-6-7-8-4VMs, 537.51sec, 267.9VMs/hour
<br />
<a href=r1.php><img src=r1.png height="230" width="300"></a> 
<a href=r2.php><img src=r2.png height="230" width="300"></a> 
<a href=r3.php><img src=r3.png height="230" width="300"></a> 
<a href=r4.php><img src=r4.png height="230" width="300"></a> 
<a href=r5.php><img src=r5.png height="230" width="300"></a> 
<a href=r6.php><img src=r6.png height="230" width="300"></a> 
<a href=r7.php><img src=r7.png height="230" width="300"></a> 
<br />
<a href=r3.php><img src=r3-net.png height="150" width="300"></a> 
<a href=r6.php><img src=r6-net.png height="150" width="300"></a> 
<a href=r7.php><img src=r7-net.png height="150" width="300"></a> 

<h3>2. 40MB/s </h3>
<a href=r8.php>r8</a>: 60VMs,
<a href=r9.php>r9</a>: 40VMs, 40-20-40MB/s, 
<a href=r10.php>r10</a>: 40VMs, 40-30(200s)-20(400s)-30(600s)-40(800s)MB/s
<br />
<a href=../none/>compare with none-controller</a>
<br />
<a href=r8.php><img src=r8.png height="230" width="300"></a> 
<a href=r9.php><img src=r9.png height="230" width="300"></a> 
<a href=r10.php><img src=r10.png height="230" width="300"></a> 
<br />
<a href=r8.php><img src=r8-net.png height="200" width="300"></a> 
<a href=r9.php><img src=r9-net.png height="200" width="300"></a> 
<a href=r10.php><img src=r10-net.png height="200" width="300"></a> 
<br />

<br />
<a href=r106.php><img src=r106.png height="230" width="300"></a> 
<a href=r11.php><img src=r11.png height="230" width="300"></a> 
<a href=r13.php><img src=r13.png height="230" width="300"></a> 
<br />
<a href=r106-net.php><img src=r106-net.png height="200" width="300"></a> 
<a href=r11-net.php><img src=r11-net.png height="200" width="300"></a> 
<a href=r13-net.php><img src=r13-net.png height="200" width="300"></a> 
<br />

<h3>3. 40VMs with low bandwidth 40MB/s limit</h3>
mild congestion: 40MB/s
<br />
severe congestion: 10MB/s
<br />
[Left, severe low bandwidth] 40VMs Starting from 1VMs: 1-2-4-5-6-7-8-1VMs, sec, VMs/hour
<br />
[Center, severe low bandwidth] 40VMs Starting from 1VM: 1-2-4-8-9-4-5-2-3-1-2-3-4-2VMs, sec, VMs/hour
<br />
[Right, low bandwidth] 40VMs Starting from 1VM: 1-2-4-8-9-4-5-2-3-4-5-2-3-2VMs, sec, VMs/hour
<br />
<a href=../none/>compare with none-controller</a>
<br />
<a href=throttle/r6.php><img src=r0.png height="230" width="300"></a> 
<a href=r8.php><img src=r0.png height="230" width="300"></a> 
<a href=r9.php><img src=r0.png height="230" width="300"></a> 
<br />
<a href=r6-net.php><img src=r0-net.png height="200" width="300"></a> 
<a href=r8-net.php><img src=r0-net.png height="200" width="300"></a> 
<a href=r9-net.php><img src=r0-net.png height="200" width="300"></a> 
<br />

<h3>4. 40VMs with throttling down to 40MB/s limit at 3th period around 200sec</h3>
<br />
