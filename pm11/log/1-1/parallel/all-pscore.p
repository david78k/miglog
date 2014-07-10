data = "all-pscore.dat"
figure = "all-pscore.eps"

set terminal postscript eps enhanced solid color
#set terminal png
#set terminal postscript eps enhanced solid color
#set terminal hp500c 300 tiff
set output figure 
set   autoscale                        # scale axes automatically

unset log                              # remove any log-scaling
unset label                            # remove any previous labels
#set xtic auto                          # set xtics automatically
set ytic auto                          # set ytics automatically

set tmargin 1;
#set multiplot;
set size 1,1;
#set origin 0.0,0.5;

# first plot
#set title "bandwidth limit 50 MB/s"
#set title "PI controller with bandwidth limit change from unlimited to 50 MB/s"
set xlabel "VMs"
set ylabel "total migration time (sec)"
set y2label "average migration time (sec)"
set y2tic auto
set ytics nomirror
#set y2tics
set tics out
set autoscale y
#set autoscale y2;
#set key title "migration speed 40MB/s"
#set key 0.01,100
set key center top
#set label "Yield Point" at 0.003,260
#set arrow from 0.0028,250 to 0.003,280
#set xr [0.0:0.022]
set yr [0:]
set y2r [0:]
#plot data using 1:(3600*$1/$2):xtic(1) axis x1y1 title 'throughput (VMs/hour)' with linespoints, 
#plot data using 2:xtic(1) title 'total migration time' with linespoints, \
#data using 3:xtic(1) axis x1y2 title 'average migraiton time' with linespoints

set xtic rotate by -45 scale 0

set style fill solid border -1
set boxwidth 0.3 absolute

plot data using ($0-0.15):2 title 'total migration time' with boxes fs pattern 1, \
data using ($0+0.15):3 axis x1y2 title 'average migraiton time' with boxes lc rgb "grey", \
data using 0:($4*100) axis x1y2 title 'pscore' with linespoints lc rgb "black", \
data using 0:(0):xticlabel(1) title '' w l

#data using 6:xtic(1) title 'run5' with linespoints lt -1, \

#data using 1:11 title 'run10' with linespoints

#data using 1:2 axis x2y2 title 'total migration time (s)' with linespoints

# second plot
#unset multiplot;

