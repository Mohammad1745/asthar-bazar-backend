#!/usr/bin/python3

import os

os.mkdir('test')
f = open('test/test.py', 'w+')
f.writelines('\nf=open(\'text.txt\', \'w+\')')
