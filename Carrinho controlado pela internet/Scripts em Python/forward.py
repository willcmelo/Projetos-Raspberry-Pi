

import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BCM)

# in1, in2, in3, in4 são os pinos conectados na ponte H, para controle dos motores DC
in1=22
in2=23 
in3=24
in4=25

# pinos configurados como saída digital
GPIO.setup(in1, GPIO.OUT)
GPIO.setup(in2, GPIO.OUT)
GPIO.setup(in3, GPIO.OUT)
GPIO.setup(in4, GPIO.OUT)

def forward():
    GPIO.output(in1, 1)
    GPIO.output(in2, 0)
    GPIO.output(in3, 1)
    GPIO.output(in4, 0)
   
while True:

    forward();   
    time.sleep(2)
    GPIO.cleanup()