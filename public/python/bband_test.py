from pandas_datareader import data as pdr
import yfinance as yf
import pandas as pd
import numpy as np
import json

yf.pdr_override()
data = pdr.get_data_yahoo("2330.TW", start="2020-01-01", end="2020-03-18")


def upbreak(tsLine,tsRefLine):

    n=min(len(tsLine),len(tsRefLine))
    tsLine=tsLine[-n:]
    tsRefLine=tsRefLine[-n:]
    signal=pd.Series(0,index=tsLine.index)
    for i in range(1,len(tsLine)):
        if all([tsLine[i]>tsRefLine[i],tsLine[i-1]<tsRefLine[i-1]]):
            signal[i]=1
    return(signal)

def downbreak(tsLine,tsRefLine):
    n=min(len(tsLine),len(tsRefLine))
    tsLine=tsLine[-n:]
    tsRefLine=tsRefLine[-n:]
    signal=pd.Series(0,index=tsLine.index)
    for i in range(1,len(tsLine)):
        if all([tsLine[i]<tsRefLine[i],tsLine[i-1]>tsRefLine[i-1]]):
            signal[i]=1
    return(signal)


def bbands(tsPrice,period=20,times=2):
    upBBand=pd.Series(0.0,index=tsPrice.index)
    midBBand=pd.Series(0.0,index=tsPrice.index)
    downBBand=pd.Series(0.0,index=tsPrice.index)
    sigma=pd.Series(0.0,index=tsPrice.index)
    for i in range(period-1,len(tsPrice)):
        midBBand[i]=np.nanmean(tsPrice[i-(period-1):(i+1)])
        sigma[i]=np.nanstd(tsPrice[i-(period-1):(i+1)])
        upBBand[i]=midBBand[i]+times*sigma[i]
        downBBand[i]=midBBand[i]-times*sigma[i]

    BBands=pd.DataFrame({'upBBand':upBBand[(period-1):],\
                         'midBBand':midBBand[(period-1):],\
                         'downBBand':downBBand[(period-1):],\
                         'sigma':sigma[(period-1):],\
                         'close':tsPrice[0:]
                         })
    return(BBands)



#################################布林通道參數
mean=20
std=2

tsmcBBands=bbands(data.Close,mean,std)

#將nan傳承空值
tsmcBBands = tsmcBBands.replace(np.nan, "null")
#tsmcBBands = tsmcBBands.replace(np.nan, "")


################################轉資料
#時間
time=tsmcBBands.index

time2=time.strftime('%d %b %Y %H:%M')

time2=time2+' Z'

time22=list(time2)


data_time=time22
data_close=data['Close'].values.tolist()
data_upBBand=tsmcBBands['upBBand'].values.tolist()
data_midBBand=tsmcBBands['midBBand'].values.tolist()
data_downBBand=tsmcBBands['downBBand'].values.tolist()
#新加的欄位
data_open=data['Open'].values.tolist()
data_high=data['High'].values.tolist()
data_low=data['Low'].values.tolist()
data_volume=data['Volume'].values.tolist()




stockBBand_dict = {
             "time": data_time,
             "close": data_close,
             "open": data_open,
             "high": data_high,
             "low": data_low,
             "volume": data_volume,
             "upBBand": data_upBBand,
             "midBBand": data_midBBand,
             "downBBand": data_downBBand,
                }

stockBBand_dict2 = json.dumps(stockBBand_dict)
print(stockBBand_dict2)

#匯出json




