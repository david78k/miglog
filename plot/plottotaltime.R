#!/usr/bin/Rscript

args <- commandArgs(trailingOnly = TRUE)
print(args)
src <- args[1]
prefix = src

xlabel = "VM WINDOW"
ylabel = "TOTAL TIME (SEC)"

# figure size in pixel
fheight = 200
#fheight = 300
fwidth = 300
#fwidth = 400

# filter missing values
#data <- read.table(src, na.strings = "NA", fill = TRUE, header=1)
data <- read.table(src, na.strings = "NA", fill = TRUE)

# replace missing values to zero
data[is.na(data)] <- 0
#print(data)

# transpose
#data <- t(data[,-1])
#print(data)

require(devEMF)

genplot <- function (type) {
        #rm(list = ls())      # Clear all variables
        #graphics.off()    # Close graphics windows

        imgfile = paste(prefix, sep = ".", type)

        if(type == "png") {
                png(imgfile, height = fheight, width = fwidth)
                #png(paste0(prefix, ".png"), height=fheight, width=fwidth)
        #       png(paste0(prefix, ".png"))
        } else if (type == "pdf") {
                pdf(imgfile, height=1.5*fheight/100.0, width=1.5*fwidth/100.0)
                #pdf(paste0(prefix, ".pdf"), height=1.5*fheight/100.0, width=1.5*fwidth/100.0)
        } else if (type == "eps") {
                postscript(imgfile)
                #postscript(paste0(prefix, ".eps"))
                #postscript(paste0(prefix, ".eps"), res = resolution)
        } else if (type == "emf") {
                emf(imgfile, height=1.5*fheight/100.0, width=1.5*fwidth/100.0)
                #emf(paste0(prefix, ".emf"), height=1.5*fheight/100.0, width=1.5*fwidth/100.0)
        }

	# c(bottom, left, top, right)
	par(mar = c(5, 5, 1, 1) + 0.1)

	#df <- data.frame(values = c(data[1,8], data[1:2,7], data[1:3,6], data[1:4,5], data[1:5,4], data[1:6,3], data[1:7,2], data[1:8,1]), 
#		vars = rep(c("1", "2", "3", "4", "5", "6", "7", "8"), times = c(1,2,3,4,5,6,7,8)))
	
	#print(df)
	
	ylim <- range(data)
#	print (ylim)
#	print (ylim[0])
#	print (ylim[1])
#	print (ylim[2])

	# las = 2 to rotate xlabels
	#boxplot(x = 1:nrow(data), y = c(data[1,8], data[1:2,7], data[1:3,6], data[1:4,5], data[1:5,4], data[1:6,3], data[1:7,2], data[1:8,1]),
	plot(x = 1:nrow(data), y = data[,1],
		type = "b",
		las = 1, 
		xlab = xlabel,
		ylab = ylabel#,
#		names = c("1", "2", "3", "4", "5", "6", "7", "8")
			#"9", "10", "12", "14", "16", "18", "20", "30", 
			#"40", "50", "60", "70", "80", "90", "100"),
		,ylim = c(0, ylim[2])
	)
}

genplot("png")
genplot("pdf")
genplot("emf")
