Users Database in Nette
=================

Project aimed at basic opeations with database.

Core features:
- Registration, login with authentication and logout
- Model UsersFacade encapsulating the business logic related to user management and provide a clean API for interacting with the users table in the database
- Use of [Contributte Datagrid](https://contributte.org/packages/contributte/datagrid/#composer) for visualization of data stored in the database.
- Authenticated users have the ability to modify the database (add, edit and delete entries).
- Responsive design utilizing Bootstrap CSS framework.

Requirements
------------

This Web Project is compatible with Nette 3.2 and requires PHP 8.1.


Installation
------------

To install the Web Project, Composer is the recommended tool. If you're new to Composer,
follow [these instructions](https://doc.nette.org/composer). Then, run:

```
git clone https://github.com/erikvlcak/nette-users
cd nette-users
composer install
```

Database
------------
Configure access to MySQL database in the `config/local.neon` file:

```
database:
	dsn: 'mysql:host=127.0.0.1;dbname=***'
	user: root
	password: ''
```
Then, create the `users` table using SQL statement in the data/mysql.sql file, located in database folder.


Web Server Setup
----------------

To quickly dive in, use PHP's built-in server:

	php -S localhost:8000 -t www

Then, open `http://localhost:8000` in your browser to view the welcome page.

For Apache or Nginx users, configure a virtual host pointing to your project's `www/` directory.

**Important Note:** Ensure `app/`, `config/`, `log/`, and `temp/` directories are not web-accessible.
Refer to [security warning](https://nette.org/security-warning) for more details.

