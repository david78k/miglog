<html>
<head>

</head>
<title>2-2 WAN AIMD</title>
<body>

<h2>Multiple hosts 2-2 in WAN AIMD (<a href=../>../UP</a>)</h2>

<h3>1. <a href=125/>No-limit (125MB/s) with slow start</a> for mid bandwidth</h3>
Total: 80VMs, 673.19sec, 427VMs/hour
<br />
[Left, mid bandwidth] 40VMs: 1-2-4-8-9-10-5-1VMs, 673.19sec, 213VMs/hour
<br />
[Right, mid bandwidth] 40VMs: 1-2-4-8-9-10-6VMs, 658.04sec, 218VMs/hour
<br />
<a href=r1.php><img src=r1.png height="300" width="400"></a> 
<a href=r1-2.php><img src=r1-2.png height="300" width="400"></a> 
<br />
<a href=r1-net.php><img src=r1-net.png height="200" width="400"></a> 
<a href=r1-2-net.php><img src=r1-2-net.png height="200" width="400"></a> 

<h3>2. No limit with slow start for 80VMs for low bandwidth</h3>
Total: 80VMs, 973.41sec, 295VMs/hour
<br />
[Left, low bandwidth] 40VMs: 1-2-4-8-9-10-6VMs, 935.11sec, 153VMs/hour
<br />
[Right, low bandwidth] 40VMs: 1-2-4-8-9-10-6VMs, 973.41sec, 147VMs/hour
<br />
<a href=r6.php><img src=r6.png height="300" width="400"></a> 
<a href=r6-2.php><img src=r6-2.png height="300" width="400"></a> 
<a href=r6-net.php><img src=r6-net.png height="200" width="400"></a> 
<a href=r6-2-net.php><img src=r6-2-net.png height="200" width="400"></a> 
<br />

<h3>3. No limit without slow start for 80VMs starting with 8VMs</h3>
Total: 80VMs, 943.89sec, 305VMs/hour
<br />
[Left, mid bandwidth] 40VMs: 8-9-10-11-2VMs, 594.33sec, 242VMs/hour
<br />
[Right, mid bandwidth] 40VMs: 8-9-4-5-2-3-4-5VMs, 943.89sec, 152VMs/hour
<br />
<a href=r2.php><img src=r2.png height="300" width="400"></a> 
<a href=r2-2.php><img src=r2-2.png height="300" width="400"></a> 
<br />
<a href=r2-net.php><img src=r2-net.png height="200" width="400"></a> 
<a href=r2-2-net.php><img src=r2-2-net.png height="200" width="400"></a> 
