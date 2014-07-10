data = "/home/tsugawa/log/1-1/parallel/40vms-r2.dat"
#data = "lim125.dat"
#figure = "lim125.png"
#figure = "lim125.eps"
figure = "/home/tsugawa/log/1-1/parallel/40vms-r2.eps"

set terminal postscript eps enhanced solid color
#set terminal png
#set terminal postscript eps enhanced solid color
#set terminal hp500c 300 tiff
set output figure 
set   autoscale                        # scale axes automatically

unset log                              # remove any log-scaling
unset label                            # remove any previous labels
set xtic auto                          # set xtics automatically
set ytic auto                          # set ytics automatically

set tmargin 1;
#set multiplot;
#set size 1,0.7;
#set origin 0.0,0.5;

# first plot
#set title "bandwidth limit 50 MB/s"
set xlabel "VM sequence"
set ylabel "migration time (sec)"
#set y2label "number of VMs"
#set y2tic auto
set ytics nomirror
#set y2tics
#set tics out
set autoscale y
set autoscale y2;
#set key title "migration speed 40MB/s"
#set key at 3.2,440
#set key left
#set label "Yield Point" at 0.003,260
#set arrow from 0.0028,250 to 0.003,280
#set xr [0:150]
#set yr [0:350]
set yr [0:]
#set y2r [0:8]
#set y2r [0:]

#plot data using 1:6 title 'throughput (VMs/hour)' with linespoints, \
#plot data using 1:(3600*$1/$6):xtic(1) title 'throughput (VMs/hour)' with linespoints, #plot data using 1:(3600*$1/$6) title 'throughput (VMs/hour)' with linespoints, 
plot data using 1 title 'time' with linespoints
#data using 1 axis x1y2 title 'number of VMs' with linespoints

#data using 1 axis x1y2 title 'number of VMs' with linespoints
#data using 1:6 axis x1y2 title 'total migration time (s)' with linespoints
# second plot
#unset multiplot;

