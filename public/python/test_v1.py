# -*- coding: utf-8 -*-
"""
Created on Thu Mar 19 13:00:09 2020

@author: User
"""

from pandas_datareader import data as pdr
import time
import yfinance as yf
import json

import sys

yf.pdr_override()

data = pdr.get_data_yahoo("2330.TW", start="2019-12-01", end="2019-12-31") #測試用
# data = pdr.get_data_yahoo(sys.argv[1], start=sys.argv[2], end=sys.argv[3]) #帶入時間區間



#時間格式重組
time=data.index
time2=time.strftime('%d %b %Y %H:%M')
time2=time2+' Z'
time22=list(time2)

#重組資料陣列
newData=[]
                                                #特別注意鍵值名稱要與圖表命名規則相同
for vel,time in enumerate(time22):              #將陣列加入第一筆字典資料time
    newData += [{"t":str(time)}]
for vel,index in enumerate(data['Open']):       #在陣列 第vel比 加入鍵值Opne 並將值轉為字串
    newData[vel]['o'] = str(index)
for vel,index in enumerate(data['High']):       #在陣列 第vel比 加入鍵值High 並將值轉為字串
    newData[vel]['h'] = str(index)
for vel,index in enumerate(data['Low']):        #在陣列 第vel比 加入鍵值Low 並將值轉為字串
    newData[vel]['l'] = str(index)
for vel,index in enumerate(data['Close']):      #在陣列 第vel比 加入鍵值Close 並將值轉為字串
    newData[vel]['c'] = str(index)
# for vel,index in enumerate(data['Volume']):     #在陣列 第vel比 加入鍵值Volume 並將值轉為字串
#     newData[vel]['Volume'] = str(index)



stockprice_dict2 = json.dumps(newData)


print(stockprice_dict2)
