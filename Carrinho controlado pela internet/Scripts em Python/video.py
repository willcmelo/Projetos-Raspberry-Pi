#programa para tirar fotos da camera raspberry pi

import time
import picamera
import random


with picamera.PiCamera() as camera:
    i = random.random()
    camera.start_preview()
    camera.start_recording('/var/www/images/video%s.h264' % i)
    time.sleep(5)
    camera.stop_recording()
    camera.stop_preview()
    camera.close()