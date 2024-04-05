# About The Project

This project was built with the objective of demonstrating how middleware can be used to intercept requests and set a different database connection based on a custom configuration that can be done in the "SelectDatabase.php" file.

## Packages Used

- Laravel Sanctum

## Key Files

- `config/database.php`
- `app/Http/Middleware/SelectDatabase.php`
- `app/Http/Kernel.php`
- `.env`

## Steps

1. In `config/database.php`, create all the database connections you want to connect.

2. Create a `SelectDatabase.php` file. In this file, you will be able to customize the parameter used to define which database connection will be used. For example, at the time of publication of this specific code, it is defined to change the database connection based on the existence of an authenticated user and a number.

3. In `Kernel.php`, add the following line to the `$middleware` configuration array: `'select.database' => \App\Http\Middleware\SelectDatabase::class`.

4. Finally, add the environment variables for the additional databases configuration in your `.env` file.

By following these steps, you can effectively utilize middleware to dynamically set database connections based on custom configurations in your Laravel application. EVEN IF YOU ARE A STUPID MONKEY