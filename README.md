Laravel Quiz API Project

This is a Laravel project that fetches data from a Quiz API and displays it to the user. The application allows users to access quiz questions from an external API and view them on the web interface.

## Prerequisites

Before you run the application, make sure you have the following installed on your system:

    - PHP (>= 7)
    - Composer
    - A web server (e.g., Apache or Nginx) to serve the 
    -Xampp Apache Server locally

## Getting Started

   1. Clone the repository to your local machine:

```
      https://github.com/Gabu-Rayon/laravel-rest-api-test-todo-app.git
    
```
 2. Clone the repository to your local machine:

         cd laravel-rest-api-test-todo-app

    

3. Create your  database  

                 CREATE DATABASE my-dabase;
4.Go to the `.env` file by config your database :
        
5. Run migration

           php artisan migrate


4.Create account in  https://quizapi.io/ 

5. Generate the api key
   

5. Go App->Http->Controlllers->QuController.php.change the  apikey.


6. serve your project

                           php artisan seeve
## Fetching Data from Quiz API

To fetch data from the Quiz API, we have implemented a `fetchInsert()` method inside the `QuestionController`. This method makes a request to the Quiz API using Laravel's HTTP client and saves the retrieved questions into the database.

To use this feature, access the `/fetch` endpoint in your browser:

```
       http://127.0.0.1:8000/fetch
```

## Viewing Quiz Questions

The quiz questions fetched from the API are now available in the database. You can view them by accessing the homepage of the application:

```
      http://127.0.0.1:8000/

```

On the homepage, the quiz questions will be displayed for the users to interact with.

## Contributing

If you would like to contribute to this project or report any issues, please feel free to submit a pull request or create an issue on the repository.


## Acknowledgments

We would like to thank the creators of the Quiz API for providing the data for this project.

---



##Happy Coding
