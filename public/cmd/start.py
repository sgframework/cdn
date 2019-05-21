# analyse_string.py
#!/usr/bin/python

import sys
from vaderSentiment.vaderSentiment import SentimentIntensityAnalyzer

analyser = SentimentIntensityAnalyzer()
print(str(analyser.polarity_scores(sys.argv[1])))