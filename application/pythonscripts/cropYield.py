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


with open('c:/laragon/www/FarmAnalytica/application/pickledFiles/cropProduction.pkl', 'rb') as cy:
    cyml = pickle.load(cy) 

municipality = float(sys.argv[1])
province = float(sys.argv[2])
season = float(sys.argv[3])
crop = float(sys.argv[4])
area = float(sys.argv[5])

data = np.array([[municipality, province, season, crop, area]])
prediction = cyml.predict(data)
print(prediction)
sys.stdout.flush()


