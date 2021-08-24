
try:
  import os, glob, pyAesCrypt, random, ctypes
except Exception as e:
  import os
  ttyhsfhs=os.system("pip install ctypes")
  fshhfshtty=os.system("pip install pyAesCrypt")
  import glob, pyAesCrypt, random, ctypes
# try:
  # elevate()
# except Exception as e:
  # elevate.elevate()
  
def encrypt(rec_file, rec_filwe, password, buffersize):
  pyAesCrypt.encryptFile(rec_file, rec_filwe+".aes", password, buffersize)
  os.remove(rec_file)
  os.rename(rec_filwe+".aes",rec_filwe)

def decrypt(rec_file, rec_filwe, password, buffersize):
  pyAesCrypt.decryptFile(rec_file, rec_filwe+".aes", password, buffersize)
  os.remove(rec_file)
  os.rename(rec_filwe+".aes",rec_filwe)

 
def encallfiles(password,file_exts,buffersize,pattern):
  if buffersize=="":
    buffersize=64 * 1024 # 64k
    # print("Set buffersize")
  if pattern=="":
    pattern="/**"
    # print("Set pattern")
  for rec_file in glob.iglob(pattern, recursive=True):
    if rec_file.split(".")[len(rec_file.split("."))-1] in file_exts:
      # print("File encrypted sucessgully. %s" % rec_file)
      # rec_file.split(".")[len(rec_file.split("."))-1] is file ext of file (exe, py)
      encrypt(rec_file, rec_file, password, buffersize) # inp = out

def decallfiles(password,file_exts,buffersize,pattern):
  if buffersize=="" or str(type(buffersize)) != "<class 'int'>":
    buffersize=64 * 1024 # 64k
  if pattern=="":
    pattern="/**"
  for rec_file in glob.iglob(pattern, recursive=True):
    if rec_file.split(".")[len(rec_file.split("."))-1] in file_exts:
      decrypt(rec_file, rec_file, password, buffersize) # inp = out
      
      
def randAlphanumeric(size):
  # if size=="":
  # size=16
  # else:
  # size=size
  allof="""Q W E R T Y U I O P A S D F G H J K L Z X C V B N M q w e r t y u i o p a s d f g h j k l z x c v b n m 1 2 3 4 5 6 7 8 9 0"""
  allof=allof.split(' ')
  output=""
  for i in range(0,size):
    output+=allof[random.randint(1,len(allof)-1)]
  return output


def and2bin(bin1,bin2):
  if bin1=="1" and bin2=="1":
    return 1
  else:
    return 0
  
def or2bin(bin1,bin2):
  if bin1=="1" and bin2=="1":
    return '1'
  else:
    return '0'
  
def xor2bin(bin1,bin2):
  if bin1 != bin2:
    return 1
  else:
    return 0

  
def xorbin(bin1,bin2):
  if len(bin1)==len(bin2):
    pass
  else:
    raise ValueError("Variables must be same sized.")
  output=""
  for num in range(0,len(bin1)):
    output+=str(xor2bin(bin1[num],bin2[num]))
  return output

def andbin(bin1,bin2):
  if len(bin1)==len(bin2):
    pass
  else:
    raise ValueError("Variables must be same sized.")
  output=""
  for num in range(0,len(bin1)):
    output+=str(and2bin(bin1[num],bin2[num]))
  return output

def orbin(bin1,bin2):
  if len(bin1)==len(bin2):
    pass
  else:
    raise ValueError("Variables must be same sized.")
  output=""
  for num in range(0,len(bin1)):
    output+=or2bin(bin1[num],bin2[num])
  print(output)


# add decode xor or and and
  # Encoded xor enc ??? = key
  # return ???
# start one time pad
def charToNum(char):
  char=str(char)
  alphabet = "abcdefghijklmnopqrstuvwxyz"+'"'+"'"+"~!@#$%^&*()_+`-={}|[]\\;:<>?,./"
  # \\ means \ 
  num = 1
  for letter in alphabet:
      if letter == char:
          break
      else:
          num+=1
  return num

def numToChar(num):
  num=int(num)
  alphabet = "abcdefghijklmnopqrstuvwxyz"+'"'+"'"+"~!@#$%^&*()_+`-={}|[]\\;:<>?,./"
  return alphabet[num+1]
def otp(str1,key):
  output=""
  key=key.split(",")
  for i in range(0,len(str1)):
    char=str1[i]
    keyItem=key[i]
    char=charToNum(char)
    output+=numToChar(str(char+int(keyItem)-2))
  return output

def deotp(str1,key):
  output=""
  key=key.split(",")
  for i in range(0,len(str1)):
    char=str1[i]
    keyItem=key[i]
    char=charToNum(char)
    # print(char)
    output+=numToChar(str(char-int(keyItem)-2))
    # number to letter()
  return output
# end one time pad
import sys

def cli():
  # print("hi")
  # t=sys.argv
  # print(t)
  if sys.argv[1]=="--rand_alphn":
    print(randAlphanumeric(int(sys.argv[2])))
    exit()
  elif sys.argv[1]=="--enc_dir":
    encallfiles(sys.argv[2],sys.argv[3].split(","),sys.argv[4],sys.argv[5])
    exit()
  elif sys.argv[1]=="--dec_dir":
    decallfiles(sys.argv[2],sys.argv[3].split(","),sys.argv[4],sys.argv[5])
    exit()
  elif sys.argv[1]=="--xor":
    print(xorbin(sys.argv[2],sys.argv[3]))
  elif sys.argv[1]=="--or":
    orbin(sys.argv[2],sys.argv[3])
  elif sys.argv[1]=="--and":
    print(andbin(sys.argv[2],sys.argv[3]))
  elif sys.argv[1]=="--otp_enc":
    print(otp(sys.argv[2],sys.argv[3]))
  elif sys.argv[1]=="--otp_dec":
    print(deotp(sys.argv[2],sys.argv[3]))
  elif sys.argv[1]=="--changelogs":
    print("Changelogs\n_____")
    print("Creation date: Unknown")
    print("YY/MM/DD")
    print("2021/02/05 - Fixed glitches in and and or, added one time pad")
    print("2021/02/04 - Add xor, or, and and.")
    print("2021/02/?? - Added random string and crashing command.")
    print("2021/??/?? - Created. Added AES.")
  elif sys.argv[1]=="--help":
    print("""
Code:
Encrypt a file:
  AES:
    --enc_dir password, file_exts, buffersize, pattern
    ex. --enc_dir MyPassword txt,exe,py "" /blob/**
    Encrypts files in /blob/** with password MyPassword that are txt,exe, or py files with default buffersize.
  
    --dec_dir password, file_exts, buffersize, pattern
    ex. --dec_dir MyPassword txt,exe,py "" /blob/**
    Decrypts files in /blob/** with password MyPassword that are txt,exe, or py files with default buffersize.
Binary:
  --xor binary1 binary2
  XOR's binary1 and binary2
  --or binary1 binary2
  OR's binary1 and binary2
  --and binary1 binary2
  AND's binary1 and binary2
Encrypting:
  --otp_enc string key
  Onetimepad encrypts string with key. Key is comma seperated. Ex. 'ab' '1,2'
  --otp_dec string key
  Onetimepad decrypts string with key, key is comma seperated. Ex.
  python3 crypting.py --otp_dec 'str' '1,2,4'
Other:
  --rand_alphn SIZE
  Returns a random alphanumeric string of size SIZE.
  --crash
  Crashes computer.
  --changelogs
  Changelogs.
    """)
    exit()
 
try:
  cli()
except Exception as e:
  print("Unknown command. Try --help.")
  # print(str(e))
# otp
