import sys
from cv2 import cv2 
import numpy as np
#from matplotlib import pyplot as plt
#np.set_printoptions(threshold=sys.maxsize)

def yiq2rgb(y, i, q):
    r = y + (0.956)*i + (0.620)*q
    g = y - (0.272)*i - (0.647)*q
    b = y - (1.108)*i + (1.705)*q
    return b, g, r
def rgb2yiq(b, g, r):
    y = (0.299)*r + (0.587)*g + (0.114)*b
    i = (0.596)*r - (0.274)*g - (0.322)*b
    q = (0.211)*r - (0.523)*g + (0.312)*b
    return y, i, q

def rgb2ycbcr(b, g, r):
    yy = (0.257)*r + (0.504)*g + (0.098)*b + 16
    cb = -(0.148)*r - (0.291)*g +(0.439)*b + 128 
    cr = (0.439)*r -(0.368)*g - (0.071)*b + 128
    return yy, cb, cr
def ycbcr2rgb(yy, cb, cr):
    r = (1.164)*(yy-16) + (1.596)*(cr-128)
    g = (1.164)*(yy-16) - (0.392)*(cb-128) - (0.813)*(cr-128)
    b = (1.164)*(yy-16) + (2.017)*(cb-128) 
    return b, g, r

def yiq2ycbcr(y, i, q):
    b,g,r = yiq2rgb(y, i, q)
    return rgb2ycbcr(b, g, r)

def ycbcr2yiq(yy, cb, cr):
    b, g, r = ycbcr2rgb(yy, cb, cr)
    return rgb2yiq(b, g, r)
img = cv2.imread('4.jpg')
cv2.imshow('original',img)
height, weight, channel = img.shape

mode = input("choose a mode that you want\n1:yiq2rgb\n2:rgb2yiq\n3:rgb2ycbcr\n4:ycbcr2rgb\n5:yiq2ycbcr\n6:ycbcr2yiq\n")
for i in range(height):
    for j in range(weight):
        if(mode =='1'):
            img[i][j][0],img[i][j][1],img[i][j][2] = yiq2rgb(img[i][j][0],img[i][j][1],img[i][j][2])
        elif(mode =='2'):
            img[i][j][0],img[i][j][1],img[i][j][2] = rgb2yiq(img[i][j][0],img[i][j][1],img[i][j][2])
        elif(mode =='3'):
            img[i][j][0],img[i][j][1],img[i][j][2] = rgb2ycbcr(img[i][j][0],img[i][j][1],img[i][j][2])
        elif(mode =='4'):
            img[i][j][0],img[i][j][1],img[i][j][2] = ycbcr2rgb(img[i][j][0],img[i][j][1],img[i][j][2])
        elif(mode =='5'):
            img[i][j][0],img[i][j][1],img[i][j][2] = yiq2ycbcr(img[i][j][0],img[i][j][1],img[i][j][2])
        elif(mode =='6'):
            img[i][j][0],img[i][j][1],img[i][j][2] = ycbcr2yiq(img[i][j][0],img[i][j][1],img[i][j][2])      
cv2.imshow('result',img)


'''bgr -> rgb
   012    210'''
#plt.imshow(img)
#plt.show()
cv2.waitKey()