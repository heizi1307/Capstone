# Capstone
Place file "input_value.txt" and "test.py" in the cgi-bin, because these two files are cgi relative.
And put rest file to the servers web file, which might be htdocs in XAMPP or /var/www/html in apache .etc
And will the test.py will write the user input to the file input_value.txt. Still need a neural network model to read the file and give the result to the website at result.txt file with format "sentence./emotional" in one line.

For the AWS online server, put "test.py" and "input_value.txt" in the cgi-bin file and put rest file in /var/www/html. Change the redirect location in "test.py" to the IP address with the server. For example the IP Address for server is http://54.242.133.253/, then in the "test.py" should change thel line: print ("Location: http://localhost/Capstone/NN/show.php") to print ("Location: http://54.242.133.253/show.php")
