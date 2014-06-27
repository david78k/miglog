<html>
<head>

</head>
<title>1-1 WAN no controller</title>
<body>

<h2>Single host 1-1 in WAN no controller throttled 40VMs (<a href=../>../UP</a>)</h2>

<h3>1. <a href=40>40MB/s throttled</a></h3>
1VM: 
<a href=1vms-r1.php>r1</a>,
<a href=1vms-r2.php>r2</a>, 
<a href=1vms-r3.php>r3</a>, 
<a href=1vms-r4.php>r4</a>, 
<a href=1vms-r5.php>r5</a>, 
<a href=1vms-r6.php>r6</a> 
<br />
2VMs: 
<a href=2vms-r1.php>r1</a>,
<a href=2vms-r2.php>r2 (60VMs)</a>, 
<a href=2vms-r3.php>r3</a>, 
<a href=2vms-r4.php>r4</a>, 
<a href=2vms-r5.php>r5</a>, 
<a href=2vms-r6.php>r6</a> 
<br />
4VMs: 
<a href=4vms-r1.php>r1</a>,
<a href=4vms-r2.php>r2 (60VMs)</a>, 
<a href=4vms-r3.php>r3 (40-30-20-30-40MB/s)</a>, 
<a href=4vms-r4.php>r4 (20MB/s)</a>, 
<a href=4vms-r5.php>r5</a>, 
<a href=4vms-r6.php>r6</a> 
<br />
[Left] 6VMs: 6x6+4, 484.64sec, 297VMs/hour,
<a href=6vms-r1.php>r1</a>,
<a href=6vms-r2.php>r2</a>, 
<a href=6vms-r3.php>r3</a>, 
<a href=6vms-r4.php>r4</a>, 
<a href=6vms-r5.php>r5</a>, 
<a href=6vms-r6.php>r6</a> 
<br />
[Center] 7VMs: 7x5+5, 419.92sec, 342.9VMs/hour,
<a href=7vms-r1.php>r1</a>,
<a href=7vms-r2.php>r2</a>, 
<a href=7vms-r3.php>r3</a>, 
<a href=7vms-r4.php>r4</a>, 
<a href=7vms-r5.php>r5</a>, 
<a href=7vms-r6.php>r6</a> 
<br />
[Right] 8VMs: 8x5, 459.40sec, 313.4VMs/hour,
<a href=8vms-r1.php>r1</a>,
<a href=8vms-r2.php>r2</a>, 
<a href=8vms-r3.php>r3</a>, 
<a href=8vms-r4.php>r4</a>, 
<a href=8vms-r5.php>r5</a>, 
<a href=8vms-r6.php>r6</a> 
<br />
9VMs: 9x4, sec, VMs/hour,
<a href=9vms-r1.php>r1</a>,
<a href=9vms-r2.php>r2</a>, 
<a href=9vms-r3.php>r3</a>, 
<a href=9vms-r4.php>r4</a>, 
<a href=9vms-r5.php>r5</a>, 
<a href=9vms-r6.php>r6</a> 
<br />
10VMs: 10x4, sec, VMs/hour,
<a href=10vms-r1.php>r1</a>,
<a href=10vms-r2.php>r2</a>, 
<a href=10vms-r3.php>r3</a>, 
<a href=10vms-r4.php>r4</a>, 
<a href=10vms-r5.php>r5</a>, 
<a href=10vms-r6.php>r6</a> 
<br />
<a href=4vms-r2.php><img src=4vms-r2-net.png height="150" width="300"></a> 
<a href=4vms-r3.php><img src=4vms-r3-net.png height="150" width="300"></a> 
<a href=4vms-r4.php><img src=4vms-r4-net.png height="150" width="300"></a> 
<br />
<a href=1vms-r1.php><img src=1vms-r1.png height="230" width="300"></a> 
<a href=2vms-r2.php><img src=2vms-r2.png height="230" width="300"></a> 
<a href=4vms-r2.php><img src=4vms-r2.png height="230" width="300"></a> 
<a href=6vms-r1.php><img src=6vms-r1.png height="230" width="300"></a> 
<a href=7vms-r1.php><img src=7vms-r1.png height="230" width="300"></a> 
<a href=8vms-r2.php><img src=8vms-r2.png height="230" width="300"></a> 
<a href=9vms-r5.php><img src=9vms-r5.png height="230" width="300"></a> 
<a href=10vms-r6.php><img src=10vms-r6.png height="230" width="300"></a> 

<h3>2. 40VMs with low bandwidth 40MB/s limit</h3>
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
