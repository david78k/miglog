#!/usr/bin/Rscript

args <- commandArgs(trailingOnly = TRUE)
print(args)
src <- args[1]
prefix = paste(src, sep = ".", "scatter")
#prefix = src

xlabel = "VM WINDOW"
ylabel = "LINK UTILIZATION (%)"
#ylabel = "MIGRATION TIME (SEC)"

# 1 2 3 5 8 4 6 7
# 1 2 3 6 4 7 8 5
# 1 2 4 8 6 9 10 7
#cols = c("1", "2", "4", "8", "6", "9", "10", "7" )
cols = c("1", "2", "4", "6", "7", "8", "9", "10" )
lens = c( 2997, 1255, 642, 450, 392, 458, 433, 410 )
#lens = c( 2997, 1255, 642, 458, 450, 433, 410, 392 )

# figure size in pixel
#fheight = 200
fheight = 300
#fwidth = 300
fwidth = 400

# filter missing values
#data <- read.table(src, na.strings = "NA", fill = TRUE, header=1)
data <- read.table(src, na.strings = "NA", fill = TRUE)

# replace missing values to zero
data[is.na(data)] <- 0
#print(data)

# convert to percentage (%)
data <- data*100/125

# transpose
#data <- t(data[,-1]/1000)
#data <- t(data)
#print(data)

require(devEMF)

genplot <- function (type) {
        #rm(list = ls())      # Clear all variables
        #graphics.off()    # Close graphics windows

        imgfile = paste(prefix, sep = ".", type)

        if(type == "png") {
                png(imgfile, height = fheight, width = fwidth)
                #png(paste0(prefix, ".png"), height=fheight, width=fwidth)
        } else if (type == "pdf") {
                pdf(imgfile, height=1.5*fheight/100.0, width=1.5*fwidth/100.0)
                #pdf(paste0(prefix, ".pdf"), height=1.5*fheight/100.0, width=1.5*fwidth/100.0)
        } else if (type == "eps") {
                postscript(imgfile)
                #postscript(paste0(prefix, ".eps"), res = resolution)
        } else if (type == "emf") {
                emf(imgfile, height=1.5*fheight/100.0, width=1.5*fwidth/100.0)
                #emf(paste0(prefix, ".emf"), height=1.5*fheight/100.0, width=1.5*fwidth/100.0)
        }

	# c(bottom, left, top, right)
	par(mar = c(5, 5, 1, 1) + 0.1)

	# convert to one column data
	#df <- data.frame(values = c(data[1,8], data[1:2,7], data[1:3,6], data[1:4,5], data[1:5,4], data[1:6,3], data[1:7,2], data[1:8,1]), 
	#df <- data.frame(values = c(data[1:lens[1],1], data[1:lens[2],2], data[1:lens[3],3], data[1:lens[4],4], data[1:lens[5],5], data[1:lens[6],6], data[1:lens[7],7], data[1:lens[8],8]), 
#		vars = rep(cols, times = lens))
		#vars = rep(c("1", "2", "4", "6", "7", "8"), times = c(1,2,4,6,7,8)))
	
	#print(df)
	
	ylim <- range(data)

	# las = 2 to rotate xlabels
	#boxplot(x = 1:nrow(data), y = c(data[1,8], data[1:2,7], data[1:3,6], data[1:4,5], data[1:5,4], data[1:6,3], data[1:7,2], data[1:8,1]),
	#plot(values ~ vars, data = df,
	plot(data[,1],
		las = 1, 
		xlab = xlabel,
		ylab = ylabel,
	#	names = cols,
		ylim = c(0, 100),
		#ylim = c(0, ylim[2])
		col="darkred",
		cex = 0.5,
		pch = 20
	)
	colors = c("darkblue", "green", "yellow", "black", "slategray", "seagreen", "pink")
	for (i in 2:8) {
		cdata <- data[,i]
		cdata <- cdata[cdata!=0]
		points(cdata, col=colors[i - 1], 
			cex = 0.5,
			pch = 20
		)
		#points(data[,i], col=2:8)
	}
}

genplot("png")
genplot("pdf")
genplot("emf")
