#!/usr/bin/Rscript

#options(echo=TRUE)
# trailingOnly=TRUE means that only your arguments are returned
args <- commandArgs(trailingOnly = TRUE)
print(args)
#src = "4vms-r1.dest.dstat.csv"
src <- args[1]
#N = 4 # number of parallel migrations
#N <- as.numeric(args[2])

prefix = src
#prefix = paste0(src, ".send")

# for receiver
#startcol = 9
# for sender
startcol = 10
#integer: the number of lines of the data file to skip before beginning to read data.
startrow = 6

# figure size in pixel
fheight = 200
fwidth = 300

linewidth = 2.5

# second line color
secondlc = "red"

# second line type: 2 for dashed, 3 for dotted, 4 for dotdash, 5 for longdash, 6 for twodash
#secondlty = 5 # best
secondlty = 2 # good 
#secondlty = 3 # too pale

# legend position
#legendpos = "bottom"
legendpos = "center"
#legendpos = "topright"

# cex
fontsize = 1
#fontsize = 1.5 
#fontsize = 2 

library(ggplot2)
library(reshape)
require(devEMF)

# filter missing values
data <- read.table(src, na.strings = "NA", fill = TRUE)
#data <- data.frame(src)
#aapl <- read.csv("http://www.google.com/finance/historical?q=NASDAQ:AAPL&authuser=0&output=csv ", sep=",", header=1)
#data <- read.csv(src, sep=",", skip = startrow, header=1)
#aapl = aapl[nrow(aapl):1, ]
#print(data)

# replace missing values to zero
data[is.na(data)] <- 0
print(data)

data <- reshape(data,
           #     varying = c("V1", "V2", "v3"),
                varying = list(names(data)), 
               # v.names = "mmiles",
                timevar = "material",
            #    times = c("V1", "V2", "V3"),
                direction = "long")
 
#data <- subset(data, select = -c(id))
print(data)

genplot <- function (type) {
	#rm(list = ls())      # Clear all variables
	#graphics.off()    # Close graphics windows

	if(type == "png") {
		#type(paste0(prefix, sep = ".", type))
		png(paste0(prefix, ".png"), height=fheight, width=fwidth)
		#png(paste0(prefix, ".png"), height=300, width=400)
	#	png(paste0(prefix, ".png"))
	} else if (type == "pdf") {
		pdf(paste0(prefix, ".pdf"), height=1.5*fheight/100.0, width=1.5*fwidth/100.0)
	} else if (type == "eps") {
		#png("aapl.png")
		#postscript(paste0(prefix, ".eps"), res = resolution)
		postscript(paste0(prefix, ".eps"))
	} else if (type == "emf") {
		#postscript("aapl.eps")
		emf(paste0(prefix, ".emf"), height=1.5*fheight/100.0, width=1.5*fwidth/100.0)
		#emf('aapl.emf')
	}

	#ggplot(data, aes(x=Year, y=Thousands, fill=AgeGroup)) + geom_area()
	ggplot(data, aes(x=step, y=V1, fill=material)) + geom_area()
#	plot(data)

	# Plot the y1 data
	#par(oma=c(2,2,2,4))               # Set outer margin areas (only necessary in order to plot extra y-axis)

	# margins: oma for the number of lines in outer margin, mar for the number of lines in inside margin
	# c(bottom, left, top, right)
	#par(oma=c(0,0,0,0))               # Set outer margin areas (only necessary in order to plot extra y-axis)
#	par(mar=c(5,5,1,1)) # good fit
	#par(mar=c(4,5,0,0))  # both too tight
	#par(mar=c(4,6,0,0)) # bottom good, left wide
	#par(mar=c(6,6,0,0)) # bit wide

	#layout(rbind(1,2), heights=c(7,1))  # put legend on bottom 1/8th of the chart

	# aggregate throughput
	#plot(data[,startcol]/1000000.0,            # Data to plot - x, y
#	plot(data[,startcol]/1024.0/1024.0,            # Data to plot - x, y
	#   type="b",                    # Plot lines and points. Use "p" for points only, "l" for lines only
#	     type="l",                    # Plot lines and points. Use "p" for points only, "l" for lines only
	#     main="Time series plot",     # Main title for the plot
#	     xlab="TIME (SEC)",                 # Label for the x-axis
#	     ylab="THROUGHPUT (MB/S)",   # Label for the y-axis
#	     font.lab=2,                  # Font to use for the axis labels: 1=plain text, 2=bold, 3=italic, 4=bold italic
#	     cex.axis = fontsize,
#	     cex.lab = fontsize,
	#     ylim=c(0,20),                # Range for the y-axis; "xlim" does same for x-axis
	#     xaxp=c(0,50,5),              # X-axis min, max and number of intervals; "yaxp" does same for y-axis
	#     bty="l",                     # Box around plot to contain only left and lower lines
#	     las = 1                      # labels are parallel (=0) or perpendicular(=2) to axis, 1 for x-axis = 0 and y-axis = 1
#	)

# Add y2 data to the same plot
#points(data[,startcol]/1000000.0/N,
#points(data[,startcol]/1024.0/1024.0/N,
#       type="l",                  # Plot lines and points
#       lty=secondlty,                     # Line type: 0=blank, 1=solid, 2=dashed, 3=dotted, 4=dotdash, 5=longdash, 6=twodash
#       lwd=2,                     # Line width
#       pch=20,                    # Point type: pch=19 - solid circle, pch=20 - bullet (smaller circle), pch=21 - circle, pch=22 - square, pch=23 - diamond, pch=24 - triangle point-up, pch=25 - triangle point down.
#       pch=19,                    # Point type: pch=19 - solid circle, pch=20 - bullet (smaller circle), pch=21 - circle, pch=22 - square, pch=23 - diamond, pch=24 - triangle point-up, pch=25 - triangle point down.
#       col=secondlc)                 # Color of the plotted data

	# Add a legend to the plot
	#legend("topright",                       # x-y coordinates for location of the legend
	#legend("bottom",                       # x-y coordinates for location of the legend
	#legend(legendpos,                       # x-y coordinates for location of the legend
	#       legend=c("AGGREGATE", "PER VM"),      # Legend labels
	#       col=c("black", secondlc),   # Color of points or lines
	#       pch=c(NA,20),                 # Point type
	       #pch=c(21,19),                 # Point type
	#       lty=c(1,secondlty),                    # Line type
	#       lwd=c(1,2),                    # Line width
	#       cex = fontsize,
#		bty = 'n'
#	)
}

genplot("png")
genplot("pdf")
#genplot("eps")
genplot("emf")

