#!/usr/bin/env python
import hashlib
import ssdeep


plik = open('C:\\Users\\Damian\\Desktop\\skroty\\plik1.pdf',"rb")
try:
    read = plik.read();
finally:
    plik.close()

#generowanie skrotu MD5	
x1 = hashlib.md5(read).hexdigest() 
print("Skrot MD5:")
print(x1)	

#generowanie skrotu SHA-256
x2 = hashlib.sha256(read).hexdigest() 
print("Skrot SHA-256:")
print(x2)

#generowanie skrotu MD5DEEP
x3 = hashlib.md5(read).hexdigest() 
print("MD5DEEP:")
print(x3)	



#generowanie skrotu SSDEEP
with open('C:\\Users\\Damian\\Desktop\\skroty\\plik2.pdf',"rb") as file: 
	for wynik in iter(lambda: file.read(),""): 
		x4=hashlib.ssdeep(wynik)
		x2=x2+x4.hexdigest() 
print("Skrot SSDEEP:")
print(x4)	






os.system("pause")


