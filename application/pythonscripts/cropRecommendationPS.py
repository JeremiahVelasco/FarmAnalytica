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



cr = open('c:/laragon/www/FarmAnalytica/application/pickledFiles/cropRecommendation.pkl', 'rb')

crml = pickle.load(cr) 

N = float(sys.argv[1])
P = float(sys.argv[2])  
K = float(sys.argv[3]) 
temperature = float(sys.argv[4])  
humidity = float(sys.argv[5]) 
precipitation = float(sys.argv[6]) 

data = np.array([[N, P, K, temperature, humidity, precipitation]])
prediction = crml.predict(data)
print(prediction)
sys.stdout.flush()


