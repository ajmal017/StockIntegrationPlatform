# -*- coding: utf-8 -*-
"""
Created on Thu Mar 19 13:00:09 2020

@author: User
"""
import yfinance as yf
# import fix_yahoo_finance as yf
import pandas as pd
import numpy as np
# import math
import json


data=yf.download('1101.TW',start='2019-01-01',end='2019-05-28')



#時間
time=data.index

time2=time.strftime('%d %b %Y %H:%M')

time2=time2+' Z'

time22=list(time2)


data_time=time22
data_open=data['Open'].values.tolist()
data_high=data['High'].values.tolist()
data_low=data['Low'].values.tolist()
data_close=data['Close'].values.tolist()
data_volume=data['Volume'].values.tolist()



stockprice_dict = {
             "time": data_time,
             "open": data_open,
             "high": data_high,
             "low": data_low,
             "close": data_close,
             "volume": data_volume
                }

stockprice_dict2 = json.dumps(stockprice_dict)
print(stockprice_dict2)
