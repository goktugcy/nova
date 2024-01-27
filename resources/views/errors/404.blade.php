<!DOCTYPE html>
<html>

<head>
    <title>Not Found</title>
    <link rel="stylesheet" href="{{ asset('css/error.css') }}">
</head>

<body>
    <h1>404 - Page Not Found</h1>
    <p>
        Sorry, the page you are looking for could not be found.
        Please check the URL bar, or
        <a href="{{ route('home') }}">click here</a>
        to return to the homepage.
    </p>
</body>

</html>
