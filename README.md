## About The application

This is a small framework implemented with Laravel 7 for creating, reading, updating and deleting users.


## Tech Specification

- Laravel 7
- Laravel Mix
- Laravel Homestead
- Bootstrap
- Composer
- PHPUnit


## Installation

- <code>git clone https://github.com/Yoanns/user-crud-app.git</code>
- <code>cd user-crud-app/</code>
- Create the MySQL Database
    - mysql -u my_app -p
    - enter your password when prompted
    - create database my_app;
- <code>cp .env.example .env</code>
- Update <code>.env</code> and set your database credentials
- <code>php artisan migrate</code>
- <code>npm install</code> to create the dependencies
- <code>npm run dev</code>
- <code>php artisan serve</code>
    
## Screenshots

- ![Startpage](/public/images/1_startpage.png)

- ![First use page](/public/images/2_first_start.png)

- ![Creation User with Avatar](/public/images/3_user_with_avatar.png)

- ![List of users](/public/images/4_list_users.png)

- ![Creation User with no Avatar](/public/images/5_user_no_avatar.png)

- ![New list of users](/public/images/6_list_users.png)

- ![Update of user](/public/images/7_update_user.png)

- ![Updated list of users](/public/images/8_list_users.png)

- ![Delete a user](/public/images/9_delete_user.png)
