# Multi Step Form Registration Demo - Laravel + VueJs

### Installation
- Setup a new laravel project & connect with a database
- Add the repository in your `composer.json` file
    ```json
    "repositories": [
        {
            "url": "https://github.com/mahmudz/vue-form.git",
            "type": "git"
        }
    ],
  ```
- To fetch the package, run the following command
    ```bash
    composer require mahmudz/vue-form
    ```
- Now migrate the tables by running the following command
    ```bash
    php artisan migrate
    ```
- Publish the assets by running the following command
    ```bash
    php artisan vendor:publish --tag=vue-form-assets
    ```
- Visit the route to access the form
    ```bash
    http://localhost:8000/vue-form/applicants
    ```
  
If you face any issue, feel free to let me know @ [mahmudbappy.pri@gmail.com](mailto:mahmudbappy.pri@gmail.com)