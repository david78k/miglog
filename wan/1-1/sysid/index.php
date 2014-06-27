<html>
<head>

</head>
<title>1-1 WAN system identification</title>
<body>

<h2>Single host 1-1 WAN AIST to UF system identification(<a href=../>../up</a>)</h2>
<pre>
===================== Mauricio's paper ===================
From AIST to UF (after patch) 512MB w/ 4MB/s update: storage server (NBD) resides at AIST
- 1VM: 74 VMs/hour, 3600s/74 = 48.65s/VM
- 2VMs: 147 VMs/hour, 2*3600/147 = 48.98s/VM
- 4VMs: 212 VMs/hour, 4*3600/212 = 67.92s/VM
- 6VMs: 220 VMs/hour, 6*3600/220 =  98.18s/VM
</pre>

<!--
<h3>1. <a href=sysid/>System identification</a></h3>
-->
Max speed <font color=red>116.5</font> for eth1 (233/2 total)MB/s out of 125MB/s = 1000Mbps
<br />
Delay between AIST and UF = 179ms
<br />
Migration bandwidth usage in WAN 
<pre>
================== Always no-dedupe ==================
MaxStartups 100, net eth0
#VMs time(sec) max_bw(MB/s) throughput(vms/hour) rate(sec/vm)
1VM 36.51 29 98.6
2VMs 32.92 77 218.7
4VMs 45.24 108 318
6VMs 50.18 112 430
8VMs 103.4 87 278.5 
10VMs 122.19 104 294.6
15VMs 106.85 111 505
20VMs 150.255 112 479

MaxStartups 100, net total 
#VMs time(sec) max_bw(MB/s) 2*max_bw throughput(vms/hour) rate(sec/vm)
1VM 37.59 36.5 73 95.77
2VMs 37.06 70 140 194 
4VMs 55.14 97 194 261
6VMs 60.635 97.5 195 356
8VMs 78.01 96.5 193 369
10VMs 108 87 174 333
15VMs 281.186 70 140 256
20VMs 236.5 74 148 304.44
20VMs+30scps 108.5 217MB/s

MaxStartups 20 
10VMs 123.177 182 292.26
20VMs 266.096 169 270.58

===================== Patched ====================
MaxStartups 10
#VMs time(sec) max_bw(MB/s) throughput(vms/hour) rate(sec/vm)
1VM 61.97 4.8 58 61.97
5VMs 57.14 30 315 11.428
10VMs 78.76 49 457 7.876

MaxStartups 20
15VMs 56.319 173 958.8
20VMs 62.836 159 1145.8
</pre>

<!--
<h3>2. <a href=controller/none/>Controller none</a></h3>
<h3>3. <a href=controller/basic/>Basic controller</a></h3>
<h3>4. <a href=controller/aiad/>AIAD controller</a></h3>
<h3>5. <a href=controller/aimd/>AIMD controller</a></h3>
-->
