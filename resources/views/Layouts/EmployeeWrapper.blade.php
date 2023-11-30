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
            <a class="header-logo" href="index.html">
                <img src="images/logo.svg" alt="">
            </a>
            <div class="header-nav">
                <div class="header-search">
                    <input type="text" placeholder="Поиск..." id="search-input">
                    <label for="search-input"><img src="images/icons/search-icons.svg" alt=" heaader search icons "> </label>
                </div>
                <div class="header-right">
                    <img class="header-note" src="images/icons/note-icon.svg" alt=" header note icons">
                    <img class="header-avatar" src="images/header-avatar.svg" alt=" header avatar images">
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="main-sec">

        @yield('content')

            <div class="right-sidebar">
                <span class="cabinet-employee-title">Кабинет Сотрудника</span>
                <div class="cabinet-sidebar-employee">
                    <div class="cabinet-employee-content">
                        <img class="cabinet-employee-img" src="./images/user-1.png" alt="">
                        <div class="cabinet-employee-info">
                            <span class="cabinet-employee-name">{{auth()->user()->name}}</span>
                            <span class="cabinet-employee-email">{{auth()->user()->email}}</span>
                        </div>
                    </div>
                    <a href="{{route('logout')}}" class="commons-btn">Выход</a>
                </div>
            </div>

        </section>
    </main>

    <footer class="footer">
        <div class="container"></div>
    </footer>
</div>


<script src="js/"></script>
</body>

</html>


<!-- circle -->
<!-- fill="#0B9518" -->
<!-- stroke="#0B9518" -->
