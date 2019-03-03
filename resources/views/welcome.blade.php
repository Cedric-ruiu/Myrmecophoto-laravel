<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Myrmecophoto</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400i|Quicksand:400,500,700" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style></style>
</head>
    <body>
        <header class="o-header">
            <div class="t-wrapper o-header__wrapped">
                <a href="#" class="o-header__logo a-logo">Myrmeco<span class="-highlight">photo</span></a>
                <nav id="main-nav-header" class="o-header__nav m-nav" aria-label="Main Navigation">
                    <ul class="m-nav__items">
                        <li class="m-nav__item"><a class="m-nav__link -on" href="#Accueil" title="Home">Home</a></li>
                        <li class="m-nav__item"><a class="m-nav__link" href="#Apropos" title="Outdoor">Outdoor</a></li>
                        <li class="m-nav__item"><a class="m-nav__link" href="#Contact" title="Taxonomy">Taxonomy</a></li>
                        <li class="m-nav__item"><a class="m-nav__link" href="#Contact" title="Articles">Articles</a></li>
                    </ul>
                </nav>
                <button type="button" id="js-main-nav-header" class="u-menuBar o-header__menuBar js-toggle-on-click" role="button" aria-controls="main-nav-header" aria-expanded="false"></button>
            </div>
        </header>

        <main class="t-wrapper">
            <h1>Title h1</h1>
            <h2>Title h2</h2>
            <h3>Title h3</h3>
            <p>Paragraph</p>
        </main>

        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
