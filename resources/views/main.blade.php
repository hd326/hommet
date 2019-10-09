<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/e032011ee4.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <title>Hommet @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/app.css')}}">
</head>

<body>
    <header>
        <div id="header-mobile">
            <ul>
                <li>
                    <div id="icon">
                        <div id="hamburger"></div>
                    </div>
                </li>
                <li><i class="fas fa-phone"></i></li>
                <li><i class="fas fa-envelope-square"></i></li>
            </ul>
        </div>
        <div id="header-container">
            <nav id="left-side">
                <ul>
                    <li>
                        <!--<i class="fab fa-autoprefixer fa-3x"></i>--><span id="logo-text">HOMMET</span><br /><span id="logo-aide">Real Estate Services</span>
                    </li>
                </ul>
            </nav>
            <nav id="right-side">
                <ul id="top-nav">
                    <li class="top-main" id="social-media">
                        <ul>
                            <li><i class="fab fa-facebook"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-youtube"></i></li>
                            <li><i class="fab fa-linkedin"></i></li>
                            <li><i class="fab fa-pinterest"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                        </ul>
                    </li>
                    <li class="top-main"><i class="fas fa-phone"></i> 123.456.7890</li>
                    <li class="top-main"><i class="fas fa-envelope-square"></i> agent@hommet.com</li>
                </ul>
                <ul id="bottom-nav">
                    <li class="main-categories">
                        <span class="main-categories-text">HOME</span>
                    </li>
                    <li class="main-categories">
                        <span class="main-categories-text">PROPERTIES</span>
                    </li>
                    <li class="main-categories">
                        <i class="caret fas fa-chevron-down fa-1x"></i>
                        <span class="main-categories-text">COMMUNITIES</span>
                    </li>
                    <li class="main-categories">
                        <i class="caret fas fa-chevron-down fa-1x"></i>
                        <span class="main-categories-text">BUYERS</span>
                    </li>
                    <li class="main-categories">
                        <span class="main-categories-text">SELLERS</span>

                    </li>
                    <li class="main-categories">
                        <span class="main-categories-text">ABOUT</span>
                    </li>
                    <li class="main-categories">
                        <span class="main-categories-text">CONTACT</span>
                    </li>
                </ul>
            </nav>

        </div>
    </header>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>