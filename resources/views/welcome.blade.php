<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Myrmecophoto</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400i|Quicksand:400,500,700" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style></style>
</head>
    <body>
        <h1>Title h1</h1>
        <h2>Title h2</h2>
        <h3>Title h3</h3>
        <p>Paragraph</p>

        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
