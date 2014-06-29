data = "controller.dat"
figure = "controller.emf"

set terminal emf 23
#set terminal png
#set terminal postscript eps enhanced solid color
set output figure 
set   autoscale                        # scale axes automatically

unset log                              # remove any log-scaling
unset label                            # remove any previous labels
set xtic auto                          # set xtics automatically
set ytic auto                          # set ytics automatically

set tmargin 1;
#set multiplot;
#set size 0.72,0.72;
set size 1,1;
#set origin 0.0,0.5;

# first plot
set y2tic auto
set ytics nomirror
#set y2tics
set tics out
set autoscale y
#set autoscale y2;
#set key title "migration speed 40MB/s"
#set key 0.01,100
#set key left
set key center top
#set label "Yield Point" at 0.003,260
#set arrow from 0.0028,250 to 0.003,280
#set xr [0.0:0.022]
set yr [0:]
set y2r [0:]

set auto x
set style histogram cluster gap 2
set xtic rotate by -45 scale 0
#set xtic rotate by -45 scale 0 font ",8"

#set style data histograms

#set style line 1 lt 1 lw 50

set style fill solid border -1
#set style fill solid 0.5 
#set style fill solid 0.5 noborder

set boxwidth 0.3 absolute

#set grid

#set xlabel "number of concurrent VMs"
set xlabel "number of parallel migrations"
set ylabel "total migration time (sec)"
set y2label "individual migration time (sec)"

plot data using ($0):2 title 'total migration time' smooth freq with boxes lc rgb "white", \
data using ($0+0.3):3 axis x1y2 title 'individual migration time' smooth freq with boxes lc rgb "grey", \
data using 0:(0):xticlabel(1) title '' w l

#plot data using ($0):4 title 'total migration time' smooth freq with boxes fs pattern 1, \
#data using ($0+0.15):($4*100) axis x1y2 title 'pscore' with linespoints, \
#data using ($0+0.3):8 axis x1y2 title 'average miration time (sec)' smooth freq with boxes fs pattern 2, \
#plot data using 2:xtic(1) title 'VMs migrated' smooth freq with boxes, \
#data using 3:xtic(1) axis x1y2 title 'average time (sec)' smooth freq with boxes

#plot data using 2:xtic(1) title 'VMs migrated' smooth freq with boxes lc rgb "grey", #data using 3:xtic($1+d_width) axis x1y2 title 'average time (sec)' with boxes

# second plot
#unset multiplot;
