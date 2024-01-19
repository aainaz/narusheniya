<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>нарушители хихи</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

<div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Нарушениям.нет</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>



          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
  @guest
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/index">Вход</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/reg">Регистрация</a>
              </li>
 @endguest
 @auth
 <li class="nav-item">
    <a class="nav-link" href="/cab">Личный кабинет</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/app">Подать заявку</a>
  </li>
  @if(Auth::user()->role  == "2")
 <li class="nav-item">
    <a class="nav-link" href="/admin">Админ панель</a>
  </li>
  @endif

   <li class="nav-item">
    <a class="nav-link" href="/logout">Выход</a>
  </li>
 @endauth

                        </ul>
          </div>
        </div>
      </nav>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  {{-- </body>
</html> --}}
