# PasteAPI By 2cash
Secure PHP Paste API

# Why use PAPI?
There is no reason to use PAPI Compaired to other paste api's<br>
How ever PAPI Does supply the following: <br>
1. Very small ammounts of effective code<br>
2. An Actual API Enviroment (namespace based)<br>
3. Very secure framework compaired to other Paste API's<br>
4. Excessive ammounts of hours have been put into PAPI To secure the framework from exploits like xms, sql, backdoors and what other types of exploits.<br>

# Requirements 
All you really need to use this is the following:<br>
1. A web-server with mysql and PHP installed.<br>
2. A Medium ammount of php know how.<br>
3. The basics of looking through the code to learn how the API works as I cant be bothered to explain how everything works, but it is pretty basic.<br>
4. And last of all, a brain.<br>

# Installation
Installing PAPI Is simple, follow the instructions below.<br>
1. Drag and drop the Papi folder into your webserver.<br>
2. Make sure to upload the papi.sql file to your sql server!<br>
3. Fill out the connection information in db.php<br>
4. The usage of this API can be found below.<br>

# Usage
The usage of this API is pretty straight forwards ( a full example can be found in the index.php )<br>
to Upload a paste you can do the following <code>submit.php?title=A Super Cool Paste&message=This is really cool!</code> This will return a json with the paste ticket and information about the upload.<br>
This paste system does support multi lines via text boxes and text area boxes ( \n etc ) but when using the &message= variable with php, you neeed to make sure you include urlencode() <br>
You can view the pastes also by doing <code>view?paste=(pasteid)</code>, you can also add &simple to just display the text and not the json.<br>
As I said, there is a fully working example in the index.php file.<br>

# A personal note
Thanks for taking the time to look at this Api, I do apreciate it.
Thanks -2cash :)
