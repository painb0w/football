<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/styles.css') }}">
</head>

<body>
    <div class="container">
    <nav class="header-container">
        <div class="row justify-content-md-center align-items-center">
            <div class="col text-start">
                <a class="d-inline-flex link-body-emphasis">
                    <img src="{{ asset('storage/title.png') }}" class="img-fluid" width="20%" alt="Logo", onclick="window.location.href='/'">
                </a>
            </div>
            <div class="col text-center">
                <span class="navbar-text", onclick="window.location.href='/clubs'"   >
                    Сайт про футбол
                  </span>
            </div>
            <div class="col text-end">
                <a type="button" class="btn btn-primary" href="/clubs/create">Добавить</a> 
                <!-- <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Действия
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="/clubs/create">Добавить</a></li>
                        <li><a class="dropdown-item" href="/destroy">Удалить</a></li>
                    </ul>
                </div> -->
            </div>            
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer class="footer-container">
        <div class="row justify-content-md-center align-items-center">
            <div class="col text-start">
                <span>
                    Растопчин Павел
                </span>
            </div>
            <div class="col text-end">
                <a href="https://github.com/painb0w"><img src="{{ asset('storage/github.png') }}" class="img-fluid" width="10%" alt="github"></a>
                <a href="https://vk.com/durov"><img src="{{ asset('storage/vk.png') }}" class="img-fluid" width="10%" alt="vk"></a>
            </div>
        </div>
    </footer>   
</div> 
    <script src="{{ mix('js/app.js') }}"></script> 
</body>
</html>
