
## About My-Drive
My-Drive  is a simple app written in php laravel 8 framework. In this resistered user can login and can create directory and als can upload  files .
user can view their files . can be able to download their files .

#### Method 1
Install packages
```
composer install
```
Change database config in .env file. For example:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=g_drive
DB_USERNAME=root
DB_PASSWORD=root
```
Migrate database
```
php artisan migrate
```
Start server on default port 8000
```
php artisan serve
```
#### Method 2
If you have make utility installed then you just need to change .env file as per your database configuration and just run below command.
```
composer install && make run
```

## Run unit/fetaure test:

```
make test
```
## Step to test:
+ Register  user
+ Login user
+ Create New directory
+ Upload Files
+ View directory
+ view files
+ Download files

## Here are some screen shots of this project
### Resister
![image](https://user-images.githubusercontent.com/108226202/231734487-6acf4a09-331d-4d24-9241-6b28483b0420.png)

### Login
![image](https://user-images.githubusercontent.com/108226202/231734257-46dfd68d-d2af-44ee-8c54-b00bc40bf7f7.png)

### Access Directory
![image](https://user-images.githubusercontent.com/108226202/231734651-218b0a42-8660-43d4-8ad2-caf1075f247c.png)

### New folder

![image](https://user-images.githubusercontent.com/108226202/231734829-d14769fb-a887-49aa-bc1f-8d953d687b6b.png)
### Upload file

![image](https://user-images.githubusercontent.com/108226202/231734968-e7c379fe-63a3-4643-b3f0-ffbf8ce85f50.png)




