#!/usr/bin/Rscript

# boxplot total throughput in MB/s or link utilization %
# input: throughput file
# output: image files

args <- commandArgs(trailingOnly = TRUE)
print(args)
src <- args[1]
prefix = src

xlabel = "VM WINDOW"
ylabel = "THROUGHPUT (MB/S)"
#ylabel = "LINK UTILIZATION (%)"
#ylabel = "MIGRATION TIME (SEC)"

# 1 2 3 5 8 4 6 7
# 1 2 3 6 4 7 8 5
# 1 2 4 8 6 9 10 7
#cols = c("1", "2", "4", "6", "7", "8", "9", "10" )
#cols = c("1", "2", "4", "6", "7", "8", "10", "12", "16", "18", "20" )
#cols = c("1", "2", "4", "5", "6", "8", "10", "15", "20" )
cols = c("1", "2", "4", "6", "8", "10", "12", "14", "16", "18", "20", "40" )

# column order
#corder = c( 2,1,5,3,4,6,10,8,9,11,7 )
#corder = c( 1,2,3,6,4,7,8,5 )
#corder = c(8, 9, 7, 5, 6, 4, 2, 3, 1)
# 1 2 4 10 8 6 40 14 16 18 12 20 
corder = c(1, 2, 3, 6, 5, 4, 12, 8, 9, 10, 7, 11)

# figure size in pixel
#fheight = 200
fheight = 300
#fwidth = 300
fwidth = 400

# filter missing values
#data <- read.table(src, na.strings = "NA", fill = TRUE, header=1)
data <- read.table(src, na.strings = "NA", fill = TRUE)
#data <- read.table(src, na.strings = "NA")

# replace missing values to zero
#data[is.na(data)] <- 0
print(data)

#print(data[,9])

# convert to percentage (%)
#data <- data[data < 120]
#data <- data*100/125

# reorder columns
# 20 10 15 8 5 6 4 1 2
#data <- data[, c(8, 9, 7, 5, 6, 4, 2, 3, 1)]
data <- data[, corder]
#data[,3] <- data[,3]/2 # only for parallel 4VMs
print(data)

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
		#vars = rep(cols, times = lens))
	
#	print(df)
	
#	ylim <- range(data)

	# las = 2 to rotate xlabels
	#boxplot(x = 1:nrow(data), y = c(data[1,8], data[1:2,7], data[1:3,6], data[1:4,5], data[1:5,4], data[1:6,3], data[1:7,2], data[1:8,1]),
	#boxplot(values ~ vars, data = df,
	boxplot(data,
		las = 1, 
#		use.cols = TRUE,
		xlab = xlabel,
		ylab = ylabel,
		names = cols,
	#	names = c("1", "2", "4", "6", "7", "8", "9", "10", 
	#		"9", "10", "12", "14", "16", "18", "20", "30", 
	#		"40", "50", "60", "70", "80", "90", "100"),
		ylim = c(0, 120)
		#ylim = c(0, ylim[2])
	)
}

genplot("png")
genplot("pdf")
genplot("emf")
