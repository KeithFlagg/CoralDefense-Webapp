# CoralDefense-Webapp
Web application version of CoralDefense. Sends and receives data from Arduino via the internet. Uses SQL, php, and Arduino languages.

## To Launch
-----------
* Add files to the public_html folder on the webserver.
* Have the project code running on an Arduino.

### index.php
------------
* Contains the HTML and CSS for the site.
* uses embedded javascript to allow for dynamic buttons and sensor monitor
### ESPtable1.sql
----------------
* Initializes sql table.

### get_data.php
---------------
* Returns live table data. redraws sensor monitor with new values, called by js embedded in index

### send_arduino_data.php
------------------------
* Sends data to Arduino. writes to the command file that arduino gets

### recieve_arduino_data.php
---------------------------
* Recieves sensor data from the arduino and sends to sensor tables. 
