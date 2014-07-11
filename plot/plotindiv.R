#!/usr/bin/Rscript

# plot total throughput and individual throughput
# input: total throughput data
# output: image files

args <- commandArgs(trailingOnly = TRUE)
print(args)
src <- args[1]
#prefix = src
prefix = "indiv"
#prefix = paste(src, sep = ".", "pareto")
N <- c(1, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 40)
#N <- c(1, 2, 4, 6, 7, 8, 10, 12, 16, 18, 20)

xlabel = "VM WINDOW"
ylabel = "THROUGHPUT (MB/S)"
#ylabel = "TOTAL THROUGHPUT (MB/S)"
ylabel2 = "INDIVIDUAL THROUGHPUT (MB/S)"

# figure size in pixel
fheight = 200
#fheight = 300
fwidth = 300
#fwidth = 400

# filter missing values
#data <- read.table(src, na.strings = "NA", fill = TRUE, header=1)
data <- read.table(src, na.strings = "NA", fill = TRUE)

# replace missing values to zero
#data[is.na(data)] <- 0
#print(data)

#data <- data*100/125

# remove outliers greater than 125MB/s
#xdata <- data[,1]
#print(xdata)
#data <- xdata[xdata < 125]

# only for 4VMs in real WAN uf-aist
#data <- data/2

# column-wise average 
total <- colMeans(data, na.rm = TRUE)
cat (total)
#print (total)
cat ("\n")
cat (total/N)
cat ("\n")
#print (total/N)
#cat (total, total/N)

# transpose
#data <- t(data[,-1]/1000)
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

	ylim <- range(total)

	plot(total, las = 1, main = "", xlab = xlabel, ylab = ylabel
		, xaxt = "n", ylim = c(0, ylim[2])
	)
	axis(1, at = 1:length(N), labels = N)
	#plot(N, total, las = 1, main = "", xlab = xlabel, ylab = ylabel)	
	#plot(total, total/N, las = 1, main = "", xlab = xlabel, ylab = ylabel)	

	# second y-axis on the right
	# pch 3:+, 4:x, 8:*
	points(total/N, pch = 4)

	#front <- total[c(3,5,9,10,11)]
#	front <- total[c(3,4,5,6,7,8,9,10,11,12)]
	#points(front, front/c(4,7,16,18,20), col = "red", bg = "red", pch = 16)
	# front/N (average)
#	points(front, front/N[c(3,4,5,6,7,8,9,10,11,12)], col = "red", bg = "red", pch = 16)

	# pos: 1=below, 2=left, 3=above, 4=right
	#text(total, total/N, N, pos = 4, col = "red")
#	text(total, total/N, c("1","2","4","6","8","10","12","14","16","","20",""), pos = 4)
#	text(total, total/N, c("","","","","","","","","","18","","40"), pos = 2)
	#text(total, total/N, c(1,2,"",6,"",8,10,12,"","",""), pos = 4)
}

genplot("png")
genplot("pdf")
genplot("emf")
