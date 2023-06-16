import pickle
import time
import numpy as np
import pandas as pd
import warnings
import pickle
warnings.filterwarnings('ignore')


def loadpickles(filename):
    with open(filename, 'rb') as f:
        model = pickle.load(f)
    return model


def getSeason():
    month = time.strftime("%m")
    seasons = {'Kharif     ': ['7', '8', '9', '10'],
               'Autumn     ': ['9', '10', '11'],
               'Summer     ': ['3', '4', '5', '6'],
               'Winter     ': ['12', '1', '2'],
               'Rabi       ': ['10', '11', '12', '1', '2', '3']}
    season = ""
    for key, value in seasons.items():
        for val in value:
            if(val == str(int(month))):
                season = key
                break
    return season


def iou_calc(bb1, bb2):

    true_xmin, true_ymin, true_width, true_height = bb1
    bb_xmin, bb_ymin,  bb_width, bb_height = bb2

    true_xmax = true_xmin + true_width
    true_ymax = true_ymin + true_height
    bb_xmax = bb_xmin + bb_width
    bb_ymax = bb_ymin + bb_height

    # calculating area
    true_area = true_width * true_height
    bb_area = bb_width * bb_height

    # calculating itersection cordinates
    inter_xmin = max(true_xmin, bb_xmin)
    inter_ymin = max(true_ymin, bb_ymin)
    inter_xmax = min(true_xmax, bb_xmax)
    inter_ymax = min(true_ymax, bb_ymax)

    if inter_xmax <= inter_xmin or inter_ymax <= inter_ymin:
        iou = 0

    else:
        inter_area = (inter_xmax - inter_xmin) * (inter_ymax - inter_ymin)

        iou = inter_area / (true_area + bb_area - inter_area)

    assert iou <= 1
    assert iou >= 0

    return iou


