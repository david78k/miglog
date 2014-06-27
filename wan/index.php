<html>
<head>

</head>
<title>WAN</title>
<body>

<h2>WAN from AIST to UF (<a href=../>../up</a>)</h2>

<h3>1. <a href=1-1/>Single host 1-1</a></h3>

<h3>2. <a href=2-2/>Multiple hosts 2-2</a></h3>

<pre>
FutureGrid@UFL (2), AIST (2) machines
delay between the two locations: 179-180ms
cp (nfs) 12.826s for 257MB = 20MB/s
import script: 7m55s for copying 1GB = 1024MB/535s =  1.914MB/s

===================== Mauricio's paper ===================
From AIST to UF (after patch) 512MB w/ 4MB/s update: storage server (NBD) resides at AIST
- 1VM: 74 VMs/hour, 3600s/74 = 48.65s/VM
- 2VMs: 147 VMs/hour, 2*3600/147 = 48.98s/VM
- 4VMs: 212 VMs/hour, 4*3600/212 = 67.92s/VM
- 6VMs: 220 VMs/hour, 3600/220 =  98.18s/VM

============================= scp results ======================
MaxStartups 10
upload 673MB w/ no-update from fg1 to aist1: 2m 28s, 4.6MB/s (avg? last?)
download 673MB no-update from fg1 to aist1: 1m37s, 6.9MB/s
upload 684MB no-update from fg1 to aist1: 2m19s, 4.9MB/s
upload 684MB no-update from aist1 to fg1: 3m12s, 3.6MB/s
4scps: max 53MB/s
6scps: max 52MB/s
8scps: max 68MB/s
10scp connections: max 87MB/s

MaxStartups 20: upload 684MB no-update from aist1 to fg1 
10scp connections: max 113=226/2MB/s
12scp connections: max 109.5=219/2MB/s
20scp connections: max 112.5=225MB/s/2 = 900(1800/2)Mbps

MaxStartups 100: upload 684MB no-update from aist1 to fg1 
20scp connections: max 111=222MB/s/2 
30scp connections: max 116.5=233MB/s/2 
</pre>
