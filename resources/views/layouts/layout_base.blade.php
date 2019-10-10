<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>PEOPLE</title>

      <!-- CSS -->
      <link rel="stylesheet" href="{{ mix('css/app.css') }}">

  </head>
  <body>

    <div id="container">

      <header>
        <h1>People</h1>
        
        <div class="auth">

          @guest
            <a href="{{ route('login') }}">LOGIN</a>
            <a href="{{ route('register') }}">REGISTRATI</a>
          @else
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
               LOGOUT
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          @endguest

        </div>

      </header>

      <main>
        @yield('section')
      </main>

      <footer>
        <h5>People by marco987</h5>
      </footer>

    </div>

  </body>
</html>
