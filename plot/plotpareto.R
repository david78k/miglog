#!/usr/bin/Rscript

# input: total throughput data
# output: image files

args <- commandArgs(trailingOnly = TRUE)
print(args)
src <- args[1]
#prefix = src
prefix = "pareto"
#prefix = paste(src, sep = ".", "pareto")
N <- c(1, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 40)
#N <- c(1, 2, 4, 6, 7, 8, 10, 12, 16, 18, 20)

#xlabel = "TOTAL THROUGHPUT (MB/S)"
xlabel = "AGGREGATE THROUGHPUT (MB/S)"
#xlabel = "INDIVIDUAL THROUGHPUT (MB/S)"
ylabel = "INDIVIDUAL THROUGHPUT (MB/S)"
#ylabel = "TOTAL THROUGHPUT (MB/S)"

# figure size in pixel
#fheight = 200
fheight = 280
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

	plot(total, total/N, las = 1, main = "", xlab = xlabel, ylab = ylabel)	

	#front <- total[c(3,5,9,10,11)]
	front <- total[c(3,4,5,6,7,8,9,10,11,12)]
	#points(front, front/c(4,7,16,18,20), col = "red", bg = "red", pch = 16)
	# front/N (average)
	lines(front, front/N[c(3,4,5,6,7,8,9,10,11,12)], 
		col = "red", bg = "red", pch = 16, lty = 3
		, type = "b"
	)
	#points(front, front/N[c(3,4,5,6,7,8,9,10,11,12)], col = "red", bg = "red", pch = 16)

	# pos: 1=below, 2=left, 3=above, 4=right
	#text(total, total/N, N, pos = 4, col = "red")
	text(total, total/N, c("1","2","4","6","8","10","12","14","16","","20",""), pos = 4)
	text(total, total/N, c("","","","","","","","","","18","","40"), pos = 2)
	#text(total, total/N, c("","","","","","","","","","18","","40"), pos = 2, col = "red")
	#text(total, total/N, c("","",4,"","","","","","","","20"), pos = 2, col = "red")
	#text(total, total/N, c("","","","",7,"","","",16,18,""), pos = 3, col = "red")
	#text(total, total/N, c(1,2,"",6,"",8,10,12,"","",""), pos = 4)

	#plot(data, main = "", xlab = xlabel, ylab = ylabel)	
	#plot(density(data), main = "", xlab = xlabel, ylab = ylabel, xlim = c(0, 100))	
	#plot(density(data[,1]), main = "", xlab = xlabel, ylab = ylabel)	
#	title(main = NULL)
	#dev.off()

	#library(KernSmooth)
	#attach(faithful)
	#fhat <- bkde(x=waiting)
	#plot(fhat, xlab="x", ylab="Density function")

#	ylim <- range(data)
#	print (ylim)
#	print (ylim[1])

	# las = 2 to rotate xlabels
	#boxplot(x = 1:nrow(data), y = c(data[1,8], data[1:2,7], data[1:3,6], data[1:4,5], data[1:5,4], data[1:6,3], data[1:7,2], data[1:8,1]),
#	boxplot(values ~ vars, data = df,
#		las = 1, 
#		xlab = xlabel,
#		ylab = ylabel,
#		names = c("1", "2", "3", "4", "5", "6", "7", "8"),
			#"9", "10", "12", "14", "16", "18", "20", "30", 
			#"40", "50", "60", "70", "80", "90", "100"),
#		ylim = c(0, ylim[2])
#	)
}

genplot("png")
genplot("pdf")
genplot("emf")
