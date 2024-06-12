# Nova PHP Framework

## Project Status

**Not finished yet 🍻**

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Folder Structure](#folder-structure)
- [Contributing](#contributing)
- [License](#license)

## Introduction

Nova PHP Framework is designed to be a fast, minimal, and easy-to-use PHP framework. This project is currently under development and not yet finished.

## Features

- Lightweight and minimalistic design
- Easy to use and configure
- MVC architecture
- Basic routing
- Simple authentication middleware

## Installation

### Requirements

- PHP 7.4 or higher
- Composer
- Node.js and npm (for frontend assets)

### Steps

1. Clone the repository:

    ```bash
    git clone https://github.com/your-username/nova.git
    cd nova
    ```

2. Install PHP dependencies:

    ```bash
    composer install
    ```

3. Install frontend dependencies:

    ```bash
    npm install
    ```

4. Create a copy of the `.env.example` file and rename it to `.env`:

    ```bash
    cp .env.example .env
    ```

5. Configure your environment variables in the `.env` file.

6. Build frontend assets:

    ```bash
    npm run dev
    ```

7. Run the application:

    ```bash
    php -S localhost:8000 -t public
    ```

## Usage

### Basic Routing

Define your routes in the `routes/web.php` file:

```php
$router->get('/', 'HomeController@index');
```

### Controllers

Create controllers in the `app/Http/Controllers` directory. Example:

```php
namespace App\Http\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return $this->view('welcome');
    }
}
```
### Views
<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome to Nova PHP Framework</h1>
</body>
</html>

### Folder Structure
nova/
├── app/
│   ├── Core/
│   │   ├── Bootstrap.php
│   │   ├── Controller.php
│   │   └── Data.php
│   ├── Exceptions/
│   │   └── NotFoundException.php
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── HomeController.php
│   │   └── Middleware/
│   │       └── Auth.php
│   ├── Models/
│   │   └── User.php
├── config/
│   ├── app.php
│   └── helpers.php
├── public/
│   ├── css/
│   │   ├── error.css
│   │   └── style.css
│   ├── images/
│   │   ├── logo.png
│   │   └── nova.png
├── resources/
│   ├── js/
│   │   └── app.js
│   ├── scss/
│   │   └── app.scss
│   └── views/
│       ├── errors/
│       │   ├── 404.blade.php
│       │   └── 500.blade.php
│       ├── hello.blade.php
│       └── welcome.blade.php
├── routes/
│   └── web.php
├── .gitignore
├── .htaccess
├── README.md
├── composer.json
├── env.example
├── index.php
├── package.json
└── webpack.mix.js

### Contributing
Contributions are welcome! Please fork the repository and create a pull request with your changes. Ensure your code follows the project's coding standards and includes appropriate tests.
