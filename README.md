## PC hardware E-commerce Website using Laravel 

This is a still an ongoing project, i will not commit much for this project as this is a personal project. I will write the README more when i'm near to completion.
As this time i will put a the website URL here that will act as a demo:


## Usage

### Composer

Install Composer here:[https://getcomposer.org/download/](https://getcomposer.org/download/)
### Database Setup
This app uses XAMPP for MySQL. To use something different, open up config/Database.php and change the default driver.

To use MySQL, make sure you install it, setup a database and then add your db credentials(database, username and password) to the .env.example file and rename it to .env
or use XAMPP to more easily set it up.

### File Uploading
When uploading listing files, they go to "storage/app/public". Create a symlink with the following command to make them publicly accessible.
```
php artisan storage:link
```

### Running The App
Go to the root folder and run 
```
php artisan serve
```

## Regarding Migrate

As of now i still working on the database, so is not very efficient to inlcude the migrate or edit them, so you will need to import the current SQL file i include in the project name: dataSQL.sql

### Website
- [limupa.infinityfreeapp.com/](http://limupa.infinityfreeapp.com/) -> As this time the website will not be represent as the current progress of the project as it take 24-48h to update each time. I will update the repo more as time goes.



I'm using Limupa Template and SB Admin Dashboard
