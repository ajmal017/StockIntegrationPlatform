# -*- coding: utf-8 -*-
"""
Created on Wed Mar 18 11:19:10 2020

@author: User
"""
# import fix_yahoo_finance as yf
import yfinance as yf
import pandas as pd # 引用套件並縮寫為 pd
import json

# data=yf.download('1101.TW',start='2019-01-01',end='2019-05-28')


groups = ["Modern Web", "DevOps", "Cloud", "Big Data", "Security", "自我挑戰組"]
# 截至 2016-12-11 上午 11 時第 8 屆 iT 邦幫忙各組的鐵人分別是 54、8、18、14、6 與 65 人
ironmen = [54, 8, 18, 14, 6, 65]

ironmen_dict = {"groups": groups,
                "ironmen": ironmen
                }


xx = json.dumps(ironmen_dict)
print(xx)
