data = "all-40vms.dat"
figure = "all-40vms.emf"

set terminal emf 24
#set terminal png
#set terminal postscript eps enhanced solid color
#set terminal hp500c 300 tiff
set output figure 
set   autoscale                        # scale axes automatically

unset log                              # remove any log-scaling
unset label                            # remove any previous labels
set xtic auto                          # set xtics automatically
set ytic auto                          # set ytics automatically

#set xtic rotate by -45 scale 0

set tmargin 1;
#set multiplot;
#set size 0.7,0.7;
set size 1,1;
#set origin 0.0,0.5;

# first plot
set title "WAN fluctuation"
set xlabel "VM window"
set ylabel "total migration time (sec)"
#set y2label "survivability"
#set y2label "survival probability"
#set y2tic auto
#set ytics nomirror
#set y2tics
set tics out
set autoscale y
#set autoscale y2;
#set key title "migration speed 40MB/s"
#set key 20,1900
set key right
#set key right bottom
#set key right center
#set label "Yield Point" at 0.003,260
#set arrow from 0.0028,250 to 0.003,280
#set xr [0.0:(./genscriptparallel+1).022]
set xr [0:]
set yr [0:]
#set y2r [0:1]

#set xdata time
#set timefmt "%H:%M:%S"

#plot data using 2:xtic(1) notitle with points pt 2 lc rgb "black", \
#data using 3:xtic(1) notitle with points pt 2 lc rgb "black", \
#data using 4:xtic(1) notitle with points pt 2 lc rgb "black", \
#data using 5:xtic(1) notitle with points pt 2 lc rgb "black", \
#data using 6:xtic(1) notitle with points pt 2 lc rgb "black",  \
#data using 7:xtic(1) notitle with points pt 2 lc rgb "black", \
#data using 8:xtic(1) notitle with points pt 2 lc rgb "black", \
#data using 9:xtic(1) notitle with points pt 2 lc rgb "black", \
#data using 10:xtic(1) notitle with points pt 2 lc rgb "black", \
#data using 11:xtic(1) notitle with points pt 2 lc rgb "black" 

#plot data using 2:xtic(1) notitle with points pt 3 lc rgb "black", \
#data using 3:xtic(1) notitle with points pt 3 lc rgb "black", \
#data using 4:xtic(1) notitle with points pt 3 lc rgb "black", \
#data using 5:xtic(1) notitle with points pt 3 lc rgb "black", \
#data using 6:xtic(1) notitle with points pt 3 lc rgb "black",  \
#data using 7:xtic(1) notitle with points pt 3 lc rgb "black", \
#data using 8:xtic(1) notitle with points pt 3 lc rgb "black", \
#data using 9:xtic(1) notitle with points pt 3 lc rgb "black", \
#data using 10:xtic(1) notitle with points pt 3 lc rgb "black", \
#data using 11:xtic(1) notitle with points pt 3 lc rgb "black" 

#plot data using 2:xtic(1) notitle with points pt 7 lc rgb "black", \
#data using 3:xtic(1) notitle with points pt 7 lc rgb "black", \
#data using 4:xtic(1) notitle with points pt 7 lc rgb "black", \
#data using 5:xtic(1) notitle with points pt 7 lc rgb "black", \
#data using 6:xtic(1) notitle with points pt 7 lc rgb "black",  \
#data using 7:xtic(1) notitle with points pt 7 lc rgb "black", \
#data using 8:xtic(1) notitle with points pt 7 lc rgb "black", \
#data using 9:xtic(1) notitle with points pt 7 lc rgb "black", \
#data using 10:xtic(1) notitle with points pt 7 lc rgb "black", \
#data using 11:xtic(1) notitle with points pt 7 lc rgb "black" 

plot data using 2:xtic(1) notitle with points pt 6 lc rgb "black", \
data using 3:xtic(1) notitle with points pt 6 lc rgb "black", \
data using 4:xtic(1) notitle with points pt 6 lc rgb "black", \
data using 5:xtic(1) notitle with points pt 6 lc rgb "black", \
data using 6:xtic(1) notitle with points pt 6 lc rgb "black",  \
data using 7:xtic(1) notitle with points pt 6 lc rgb "black", \
data using 8:xtic(1) notitle with points pt 6 lc rgb "black", \
data using 9:xtic(1) notitle with points pt 6 lc rgb "black", \
data using 10:xtic(1) notitle with points pt 6 lc rgb "black", \
data using 11:xtic(1) notitle with points pt 6 lc rgb "black", \
data using 12:xtic(1) title 'average' with linespoints pt 6 lc rgb "red" 

#plot data using 2:xtic(1) notitle with points, \
#data using 3:xtic(1) notitle with points, \
#data using 4:xtic(1) notitle with points, \
#data using 5:xtic(1) notitle with points, \
#data using 6:xtic(1) notitle with points, \
#data using 7:xtic(1) notitle with points, \
#data using 8:xtic(1) notitle with points, \
#data using 9:xtic(1) notitle with points, \
#data using 10:xtic(1) notitle with points, \
#data using 11:xtic(1) notitle with points

#plot data using 2:xtic(1) title 'run1' with points, \
#data using 3:xtic(1) title 'run2' with points, \
#data using 4:xtic(1) title 'run3' with points, \
#data using 5:xtic(1) title 'run4' with points, \
#data using 6:xtic(1) title 'run5' with points, \
#data using 7:xtic(1) title 'run6' with points, \
#data using 8:xtic(1) title 'run7' with points, \
#data using 9:xtic(1) title 'run8' with points, \
#data using 10:xtic(1) title 'run9' with points, \
#data using 11:xtic(1) title 'run10' with points

#data using 12:xtic(1) title 'avg' with points

#data using 2:($0+1) axis x1y2 title '1VM' with linespoints, \

#plot data using ($0):xtic(1) notitle with linespoints

#data using 1:3 axis x1y2 title '20ms indiv' with linespoints lc rgb "black"

# second plot
#unset multiplot;

