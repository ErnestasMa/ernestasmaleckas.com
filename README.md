# Welcome to  project ernestasmaleckas.com

This project's purpose is to learn symfony framework

Used technologies
 - Symfony
 - Bootstrap
 - Jquery

## How to install

IN PROGRESS







## Setup in local environment

 - Add ip and domain in hosts (127.0.0.1 ernestasmaleckas.com)
 - Create virtualhost 
 
 ```
 <VirtualHost *:80>
   ServerName ernestasmaleckas.com
   ServerAlias www.ernestasmaleckas.com
   DocumentRoot "/var/www/html/ernestasmaleckas.com/public"
   DirectoryIndex index.php
   <Directory "/var/www/html/ernestasmaleckas.com/public">
      Options Indexes FollowSymLinks
      AllowOverride All
      Order Allow,Deny
      Allow from all
   </Directory>
    ErrorLog /var/log/apache2/ernestasmaleckas.com_error.log
    CustomLog /var/log/apache2/ernestasmaleckas.com_access.log combined
</VirtualHost>
```

## TO DO list

Weather page
 - Implement openWeather API
 - Store cities in database

About me page
 - Add info about me
 - Add CV

Questionnaire page
 - Question is stored in MySQL
 - Multiple test which user can select
 - Test must have atleast 10 question about programming :) 
 - Questions in random order
 - Every question have points (and they sum up)
 - question by question, step by step (only one can be active at the time)
 - must store last question, points in session (in case of restart / refresh page)
 - ability to restart test
 - after finished test, insert and store name and points in MySQL
 - After finished test, user gets URL with answered questions
 - Scoreboard
 
