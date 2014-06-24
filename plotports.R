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
library(grid)
require(devEMF)

# filter missing values
data <- read.table(src, na.strings = "NA", fill = TRUE)
#data <- data.frame(src)
#data <- read.csv(src, sep=",", skip = startrow, header=1)
#aapl = aapl[nrow(aapl):1, ]
#print(data)

# replace missing values to zero
data[is.na(data)] <- 0
#print(data)

data <- data[, seq(1, ncol(data), by = 2)]
#print(data)

data <- reshape(data,
           #     varying = c("V1", "V2", "v3"),
                varying = list(names(data)), 
                #v.names = "mmiles",
                v.names = "throughput",
                timevar = "VM",
		times = names(data),
            #    times = c("V1", "V2", "V3"),
                direction = "long")
 
# remove id column (last column)
#data <- subset(data, select = -c(id))
#print(data)

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

	#ggplot(data, aes(x=Year, y=Thousands, fill=AgeGroup)) + geom_area()
	#ggplot(data, aes(x=id, y=material, fill=V1)) + geom_area()
#	ggplot(data, aes(x=id*2, y=throughput, fill=VM)) + geom_area()

	graph = ggplot(data, aes(x=id*2, y=throughput, fill=VM)) +
		geom_area(position = 'stack') +
        	labs(x = "TIME (SEC)", 
        	     y = "THROUGHPUT (MB/S)"
        	     #title = "Composition of Natural Gas Pipeline Material in the United States"
		) +
        	scale_fill_discrete(name = "VM", 
        	                    breaks = names(data),
        	                    #breaks = c("plastic", "steel", "castiron"),
        	                    labels = names(data) 
        	                    #labels = c("Plastic", "Steel", "Cast Iron")
		) +
        	theme(axis.text = element_text(size = 12, color = 'black'),
        	      #axis.title = element_text(size = 12),
        	      axis.title = element_text(size = 12, face = 'bold'),
        	      #axis.title = element_text(size = 14, face = 'bold'),
		  	axis.title.x = element_text(vjust = -0.8), 
			axis.title.y = element_text(vjust = 0.5),
        	      legend.title = element_text(size = 14, face = 'bold'),
        	      legend.text = element_text(size = 12),
		      #panel.margin = unit(1, "cm"),
			# c(top, right, bottom, left)
		      #plot.margin = unit(c(0.5,0.5,0,0), "cm"),
		      plot.margin = unit(c(2,2,5,3), "mm"),
        	      plot.title = element_text(size = 18, face = 'bold'))
	plot(graph)

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

