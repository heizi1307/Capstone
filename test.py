#! /usr/bin/python3
import cgi
import os
form = cgi.FieldStorage()
if 'term' in form:
    searchterm =  form['term'].value
else:
    searchterm = "ok"
with open("input_value.txt", "r+") as f:
    f.truncate(0)
    f.write(searchterm)
    f.close()
print ("Location: http://localhost/Capstone/NN/show.php")
print ("Content-type:text/html\r\n\r\n")
print ('<html>')
print ('<head>')
print ('<title>multipart form step5</title>')
print ('</head>')
print ('<body>')
print ('</body>')
print ('</html>')