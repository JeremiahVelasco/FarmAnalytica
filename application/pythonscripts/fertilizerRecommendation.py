# Import Libraries
import numpy as np
import pandas as pd
import pickle
import sys
from sklearn.model_selection import train_test_split
from sklearn import metrics
from sklearn.model_selection import cross_val_score
from sklearn.metrics import classification_report
# Models
from sklearn.ensemble import RandomForestClassifier
import warnings
warnings.filterwarnings('ignore')


with open('c:/laragon/www/FarmAnalytica/application/pickledFiles/fertilizerRecommendation1.pkl', 'rb') as fr:
    frml = pickle.load(fr) 

temperature = float(sys.argv[1])
humidity = float(sys.argv[2])
soil = float(sys.argv[3]) 
crop = float(sys.argv[4])  
P = float(sys.argv[5])  
K = float(sys.argv[6])  
N = float(sys.argv[7])  

data = np.array([[temperature, humidity, soil, crop, N, P, K]])
prediction = frml.predict(data)
print(prediction)
sys.stdout.flush()


