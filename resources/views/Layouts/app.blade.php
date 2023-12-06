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

        </div>
    </header>

    <main>
        <section class="main-sec">

                @yield('content')


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
