#programa para tirar fotos da camera raspberry pi

import time
import picamera
import random


with picamera.PiCamera() as picx:
    i = random.random()
    picx.start_preview()
    time.sleep(5)
    picx.capture('/var/www/images/foto%s.jpg' % i)
    picx.stop_preview()
    picx.close()