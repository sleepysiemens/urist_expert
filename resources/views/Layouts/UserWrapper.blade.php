<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>glavni</title>
    <!-- DM SANS font -->
    <link rel="stylesheet" href="{{asset('fonts/DM_Sans/stylesheet.css')}}">
    <!-- Style css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body class="employee">

<div class="wrapper">

    <header class="header">
        <div class="container">
            <a class="header-logo" href="{{route('enter.index')}}">
                <img src="{{asset('images/logo.svg')}}" alt="">
            </a>
            <div class="header-nav">
                <div class="header-search">
                    <input type="text" placeholder="Поиск..." id="search-input">
                    <label for="search-input"><img src="{{asset(('images/icons/search-icons.svg'))}}" alt=" heaader search icons "> </label>
                </div>
                <div class="header-right">
                    <img class="header-note" src="{{asset(('images/icons/note-icon.svg'))}}" alt=" header note icons">
                    <img class="header-avatar" src="{{asset('images/header-avatar.svg')}}" alt=" header avatar images">
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="main-sec">
            <div class="container">

                @include('user.left_sidebar')
                @yield('content')
                @yield('right_sidebar')

            </div>

        </section>
    </main>

    <footer class="footer">
        <div class="container"></div>
    </footer>
</div>


<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/show_hide.js')}}"></script>
</body>

</html>


<!-- circle -->
<!-- fill="#0B9518" -->
<!-- stroke="#0B9518" -->
