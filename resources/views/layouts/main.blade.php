<!DOCTYPE html>
<html lang="RU-ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- CSS -->
    <link rel="stylesheet" href="../resources/css/reset.css?<?= time() ?>">
    <link rel="stylesheet" href="../resources/css/header.css?<?= time() ?>">
    <link rel="stylesheet" href="../resources/css/footer.css?<?= time() ?>">
    <link rel="stylesheet" href="../resources/css/mainPage.css?<?= time() ?>">
    <link rel="stylesheet" href="../resources/css/mainStyle.css?<?= time() ?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat&display=swap" rel="stylesheet">

    <title>@yield('title')</title>
</head>

<body>
    <!-- Header -->
    @include('includes.main.header')

    <!-- Main -->
    @yield('content')

    <!-- Fooret -->
    @include('includes.main.footer')
</body>

</html>