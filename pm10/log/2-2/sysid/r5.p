data = "r5.dat"
figure = "r5.eps"

set terminal postscript eps enhanced color size 640,355
#set terminal png
#set terminal postscript eps enhanced solid color
#set terminal hp500c 300 tiff
set output figure 
set   autoscale                        # scale axes automatically

unset log                              # remove any log-scaling
unset label                            # remove any previous labels
set xtic auto                          # set xtics automatically
set ytic auto                          # set ytics automatically

#set tmargin 0;
#set multiplot;
#set size 1,0.7;
set size ratio 0.5;
#set origin 0.0,0.5;

# first plot
#set title "bandwidth limit 50 MB/s"
#set title "PI controller with bandwidth limit change from unlimited to 50 MB/s"
set xlabel "time (sec)"
set ylabel "bandwidth usage (MB/s)"
set y2label "cpu usage (%)"
set y2tic auto
set ytics nomirror
set y2tics
set tics out
set autoscale y
set autoscale y2;
#set key title "migration speed 40MB/s"
#set key left
#set key 0.01,100
#set label "Yield Point" at 0.003,260
#set arrow from 0.0028,250 to 0.003,280
#set xr [0.0:0.022]
#set yr [0:]
set yr [0:140]
set y2r [0:100]
#set format y "%gkm"

#set style line 1 lt 2 lw 3
#set style line 1 linetype 2 linecolor rgb "orange" linewidth 1.000 pointtype 8 pointsize default
#set style line 1 linetype 2 linecolor rgb "yellow" linewidth 1.000 pointtype 8 pointsize default

plot data using ($2/1000000) title 'send' with linespoints, \
data using (100 - $5) axis x1y2 title 'cpu usage' with lines

#data using 11 title 'free memory' with linespoints, \
#data using 1 axis x2y2 title 'receive' with linespoints 
#data using 1:($2/1000000) ls 1 axis x2y2 title 'receive' with linespoints 
#plot data using 1:4 title 'user' with linespoints, \
#data using 1:5 title 'system' with linespoints, \
#data using 1:6 title 'idle' with linespoints, \
#data using 1:($2/1000000) axis x2y2 title 'receive' with lines linetype 11 
# second plot
#unset multiplot;
