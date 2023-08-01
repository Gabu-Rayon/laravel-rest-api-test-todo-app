   # Laravel Quiz API Project

This is a Laravel project that fetches data from a Quiz API and displays it to the user. The application allows users to access quiz questions from an external API and view them on the web interface.

## Prerequisites

Before you run the application, make sure you have the following installed on your system:

    - PHP (>= 7.3)
    - Composer
    - A web server (e.g., Apache or Nginx) to serve the application

## Getting Started

   1. Clone the repository to your local machine:

```
     git clone 
    cd aravel-rest-api-test-todo-app
```

2. Install the required dependencies using Composer:

```
 composer install
```

3. Create a `.env` file by copying `.env.example`:

```
      cp .env.example .env
```

4. Generate the application key:

```
php artisan key:generate
```

5. Update the `APP_URL` and database configuration in the `.env` file according to your local setup.

6. Set up the database:

```
php artisan migrate
```

## Fetching Data from Quiz API

To fetch data from the Quiz API, we have implemented a `fetchInsert()` method inside the `QuestionController`. This method makes a request to the Quiz API using Laravel's HTTP client and saves the retrieved questions into the database.

To use this feature, access the `/fetch` endpoint in your browser:

```
         http://your-app-url/fetch-
```

## Viewing Quiz Questions

The quiz questions fetched from the API are now available in the database. You can view them by accessing the homepage of the application:

```
       http://your-app-url
```

On the homepage, the quiz questions will be displayed for the users to interact with.

## Contributing

If you would like to contribute to this project or report any issues, please feel free to submit a pull request or create an issue on the repository.


## Acknowledgments

We would like to thank the creators of the Quiz API for providing the data for this project.

---
