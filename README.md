# CoralDefense-Webapp
Web application version of CoralDefense. Sends and receives data from Arduino via the internet. Uses SQL, php, and Arduino languages.

## To Launch
-----------
* Add files to the public_html folder on the webserver.
* Have the project code running on an Arduino.

### index.php
------------
* Contains the HTML and CSS for the site.

### ESPtable1.sql
----------------
* Initializes sql table.

### get_data.php
---------------
* Returns live table data.

### send_arduino_data.php
------------------------
* Sends data to Arduino.

### recieve_arduino_data.php
---------------------------
* Recieves variables and sends data to sensor tables.
