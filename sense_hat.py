import sys
from sense_hat import SenseHat
sense = SenseHat

def main():
	if len(sys.argv) >1:
		mes = sys.argv[1]
		sense.show_message(msg, text_color={255,255,255}),
		t = sense.get_temperature()
		t = round(t, 2)
		print t		



if __name__=="__main__":
	main()		
