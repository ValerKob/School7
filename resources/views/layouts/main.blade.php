<!DOCTYPE html>
<html lang="RU-ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/reset.css?<?= time() ?>">
    <link rel="stylesheet" href="./assets/css/header.css?<?= time() ?>">
    <link rel="stylesheet" href="./assets/css/footer.css?<?= time() ?>">
    <link rel="stylesheet" href="./assets/css/mainPage.css?<?= time() ?>">
    <link rel="stylesheet" href="./assets/css/mainStyle.css?<?= time() ?>">

    <link rel="stylesheet" href="./assets/css/info/basicInformation.css?<?= time() ?>">

    <link rel="stylesheet" href="./assets/css/documents/basicDocuments.css?<?= time() ?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>@yield('title')</title>
</head>

<body>
    <div class="wrapperBody">
        <!-- Header -->
        @if(\Request::is("/"))
        @include('includes.main.header')
        @elseif(\Request::is("documents"))
        @include('includes.static.header')
        @else
        @include('includes.info.header')
        @endif

        <!-- Main -->
        <div class="container_wrapper">
            @yield('content')
        </div>

        <!-- Fooret -->
        @include('includes.main.footer')
    </div>


    <!-- JS -->
    <script src="./assets/js/burgerMenu.js?<?= time() ?>"></script>
</body>

</html>