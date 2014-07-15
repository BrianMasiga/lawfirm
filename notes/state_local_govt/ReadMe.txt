
//*********************************************************
// ReadMe text
// written by DJ @kraziegent
//
// version 1.00 (11 October 2013)
//*********************************************************

included in this folder are six files:

constants.php
local_govt_db.php
Readme.txt
state_form.html
state_local_govt_post.php
states_local_govt.sql

These files would help you create a html form, which you can use to add states and local government dropdown boxes in Nigeria to any web form you've designed, it would create two drop down boxes the first to use to select any state in Nigeria and once the state has been selected, using the ONSELECT attribut of the select tag & some ajax script (which would be embeded in the head tag of your html code) it asychronously connects to the database and populates the second dropdown box with the local goverments for the selected state.

To use this files first create a database in mysql database called 'states_local_govt' next import the content of the document states_local_govt.sql, this contains two tables 'state' and 'loca_govt' with all the states and local goverments in Nigeria already added.

Next using a code editor of your choice or even notepad open the file called constants.php and edit the constants here to match those of your machine setup.

Make sure that all files are in the same folder in your htdocs folder if you are using xamp or www folder if you are using wamp, you can now test if the forms work, just load the webpage via your localhost, select a state in the state dropdown box option next select a local government if the dropdown box for the local government is populated hit submitt if all goes well you'll get a message in the form 
'You selected Ikeja local government in Lagos State Nigeria. Setup was Successful' 
Meaning your setup was successful and you can now copy the codes to your form.

Copy the codes in the body of the state_form.html file to where you want the two dropdown boxes for the states and local governments to appear, also copy the ajax scripts to the head tag of your html file. You can copy the code in the state_local_govt_post.php to the php page where you are posting all information collected in your form to.

Please do not EDIT the content of the local_govt_db.php, except if you know what you're doing.

Thank you and have fun using this as much as i had fun putting it together, you can contact me on nairaland via krazied or my twiter handle @kraziegent, for any extrar information.