## Campus QR System
Campus QR system is created to trace the primary and secondary contact of the staff/employees of an organisation. The system contains two modules, The first module is an Android app which is created to scan the QR code and Admin web interface which is created to view all the entries.


## Android App- Technologies used

nmp (node package manager)/ node.js **Version 14**.
React Native for front/back end development of an App.


##  Web Application Admin Interface - Technologies used
**Front End** - HTML, Bootstrap, CSS
**Back End** - PHP

## Server and System

**Operating system** Ubuntu 
**Web Server** Apache 
**Database** Mariadb/MYSQL

## Overview

The employees of the organisation have to mandatorily install an app , register their profile and scan the entries of each sector/gate whenever they enter the particular sector of the office. 

All the scanned entries will be made available to the web admin interface to the office management. Whenever the office management notices that someone is tested positive for COVID-19 during this time they trace the primary and secondary contacts of the positive employee using the available scanned entries and take the necessary action by intimating the primary and secondary contacts. 


## Installation User Guide for the website

Step1 : Configure the Apache server and MYSQL database on your server as per operating system. Below is the link of installation with instructions in CentOS server.

https://www.digitalocean.com/community/tutorials/how-to-install-the-apache-web-server-on-centos-7

Step2: 

Import MYSQL database. The database file is kept in the folder name sql-database. On the Linux operating system you may use the below command to import the database 

       Create a database : mysql -u root -p 
                           create database u416503160_campusqr
                           exit
                   
                           https://github.com/bbnowhere/campusqr/tree/website/sql-database
                           
                           mysql -u root -p u416503160_campusqr < u416503160_campusqr.sql
                           
Step 3: Put the website's files in the /var/www/html/ folder or your web server folder. My Current website is hosted on the server of external service providers due to the requirement of https protocol to push the data to the server from the app.

                           cd /var/www/html/
                           mkdir campusqr
                           git clone https://github.com/bbnowhere/campusqr.git
        
Step 4: Configure apache to host the website along with SSL for HTTPS protocol. 

Step 5: Now website will be ready. Change the URL as given below from the App in the App.js file to point towards the website to push the data to ther server.

            fetch(`https://{your website name }/campusqr/profile.php?` + JSON.stringify(this.state.form_values))

            fetch(`https://{ your website name }/campusqr/scandata.php?` + JSON.stringify(this.state.form_values))

            Make sure the website is configured with https protocol without https protocol the app will not send the data to the server.
            
We are now done with configuration. Now users can scan the QR codes (https://github.com/bbnowhere/campusqr/tree/app/QRCODES) and authenticated users can check the data by login to the website.
