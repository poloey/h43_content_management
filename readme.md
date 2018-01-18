# laravel content management system
Basic content management system using laravel

# Technology

#### #frontend 
* Bootstrap 4

#### #Backend 
* Laravel 5.5

# How to run this project

#### First clone project from github and cd into this project inside terminal

~~~bash
git clone https://github.com/poloey/h43_content_management.git
cd h43_content_management

~~~


#### Downloading composer package  and dumping
~~~bash
composer install
composer dump-autoload
~~~

#### Configure project
~~~php
php artisan cache:clear
php artisan config:cache
php artisan key:generate
~~~

### Create a database name with `doctor` do migration with seeding
~~~bash
php artisan migrate --seed
~~~
It will take about a minute due to seeding.

### Serving laravel project
~~~
php artisan serve
~~~


### login user:
* sumon@gmail.com     
* sarwar@gmail.com     
* mojibur@gmail.com     
* tanim@gmail.com     
* riaz@gmail.com     

##  password for all user: 
`secret`









