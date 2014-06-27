<html>
<head>

</head>
<title>1-1 WAN</title>
<body>

<h2>Single host 1-1 WAN AIST to UF (<a href=../>../up</a>)</h2>

<pre>
===================== Mauricio's paper ===================
From AIST to UF (after patch) 512MB w/ 4MB/s update: storage server (NBD) resides at AIST
- 1VM: 74 VMs/hour, 3600s/74 = 48.65s/VM
- 2VMs: 147 VMs/hour, 2*3600/147 = 48.98s/VM
- 4VMs: 212 VMs/hour, 4*3600/212 = 67.92s/VM
- 6VMs: 220 VMs/hour, 6*3600/220 =  98.18s/VM
</pre>

<h3>1. <a href=parallel/>Parallel none</a></h3>
<h3>2. <a href=sampletime>Sample time with controller</a></h3>

===================== stop-and-wait ======================
<h3>1. <a href=sysid/>System identification</a></h3>
Max speed <font color=red>116.5</font> for eth1 (233/2 total)MB/s out of 125MB/s = 1000Mbps
<br />
Delay between AIST and UF = 179ms
<br />

<h3>2. <a href=aimd/>AIMD controller for 40VMs</a></h3>
<h3>3. <a href=aimd80/>AIMD controller for 80VMs</a></h3>
<h3>4. <a href=none/>Controller none</a></h3>

