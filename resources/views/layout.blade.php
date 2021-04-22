<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Applicants Register</title>
        <link href="{{ asset(mix('css/app.css', 'vendor/vue-form')) }}" rel="stylesheet" type="text/css" />
    </head>

    <body class="antialiased bg-gray-50">
        <div id="vue-form"></div>
    </body>
    <script src="{{ asset(mix('js/app.js', 'vendor/vue-form')) }}"></script>
</html>
