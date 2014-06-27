<html>
<head>

</head>
<title>1-1 WAN AIMD</title>
<body>

<h2>Single host 1-1 in WAN AIMD (<a href=../>../UP</a>)</h2>

<a href=throttle>throttle 40MB/s</a>
<pre>
40VMs: r6 (314), r9(221), r5 (333), r7 (250)
- threshold 4: r10
50VMs: r8, r11, r13 (pm11)
- pm11: r12 (failed), r13
CA: r4, nolimit-1, nolimit-2, r2 (from 8), r3 (from 9), 
</pre>

<h3>1. <a href=125/>No-limit (125MB/s) 40VMs</a></h3>
[Left, high bandwidth] Starting from 6VMs: 6-7-8-4-5-6-4VMs, 428.54sec, 336VMs/hour
<br />
[Center, low bandwidth] Starting from 1VM: 1-2-3-4-5-2-3-4-5-6-3-2VMs, 605.60sec, 237VMs/hour
<br />
[Right,wrong] Starting from 1VM: 1-2-3-4-5-6-7-8-4VMs, 537.51sec, 267.9VMs/hour
<br />
<a href=nolimit-1.php><img src=nolimit-1.png height="230" width="300"></a> 
<a href=r4.php><img src=r4.png height="230" width="300"></a> 
<a href=nolimit-2.php><img src=nolimit-2.png height="230" width="300"></a> 
<br />
<a href=nolimit-1-net.php><img src=nolimit-1-net.png height="150" width="300"></a> 
<a href=r4-net.php><img src=r4-net.png height="150" width="300"></a> 
<a href=nolimit-2-net.php><img src=nolimit-2-net.png height="150" width="300"></a> 

<h3>2. No limit with slow start therhold 8</h3>
[Left, high bandwidth] 40VMs Starting from 1VMs: 1-2-4-8-9-10-5-1VMs, 457.55sec, 314VMs/hour
<br />
[Center, low bandwidth] 50VMs Starting from 1VM: 1-2-4-8-9-4-5-2-3-1-2-3-4-2VMs, 970.06sec, 185VMs/hour
<br />
[Right, low bandwidth] 40VMs Starting from 1VM: 1-2-4-8-9-4-5-2-3-2VMs, 651.14sec, 221.1VMs/hour
<br />
<a href=../none/>compare with none-controller</a>
<br />
<a href=r6.php><img src=r6.png height="230" width="300"></a> 
<a href=r8.php><img src=r8.png height="230" width="300"></a> 
<a href=r9.php><img src=r9.png height="230" width="300"></a> 
<br />
<a href=r6-net.php><img src=r6-net.png height="200" width="300"></a> 
<a href=r8-net.php><img src=r8-net.png height="200" width="300"></a> 
<a href=r9-net.php><img src=r9-net.png height="200" width="300"></a> 
<br />

[Left, high bandwidth] 40VMs Starting from 6VMs: 1-2-4-8-9-10-5-1VMs, sec, VMs/hour
<br />
[Center, low bandwidth] 50VMs Starting from 1VM: 1-2-4-8-9-10-11-5VMs, 813.88sec, 221VMs/hour
<br />
[Right, low bw, pm11, 11:50pm] 50VMs: 1-2-4-8-9-10-11-5VMs, 903.63sec, 199VMs/hour
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
