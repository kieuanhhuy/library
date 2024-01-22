<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Title --}}
    <title>{{__('Online biblioteka')}}</title>

    {{-- Icon --}}
    <link rel="icon" type="image/x-icon"
          href="{{ asset('library-favicon.ico') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito"
          rel="stylesheet">

    {{-- Vite slow loading --}}
    {{-- <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
</head>
<body>
<div id="app">
    <nav style="background: #F0F0F0" class="shadow-sm navbar navbar-expand-md navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{__('Online biblioteka')}}
            </a>
            <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>
                <form class="flex" method="get"
                action="{{ route('changeLang') }}">
              <button class="outline-none" name="lang" type="submit"
                      value="sr" {{ session()->get('locale') == 'sr' ?
                  'selected' : '' }}>
                  <img width="25"
                       src="https://cdn.countryflags.com/thumbs/serbia/flag-round-250.png"
                       alt="{{__('Srpski')}}" title="{{__('Srpski')}}">
              </button>

              <button class="ml-3 outline-none" name="lang" type="submit"
                      value="en" {{ session()->get('locale') == 'en' ?
                  'selected' : '' }}>
                  <img width="25"
                       src="https://vectorflags.s3.amazonaws.com/flags/uk-circle-01.png"
                       alt="{{__('Engleski')}}"
                       title="{{__('Engleski')}}">
              </button>

              <button class="ml-3 outline-none" name="lang" type="submit"
                      value="it" {{ session()->get('locale') == 'it' ?
                  'selected' : '' }}>
                  <img width="25"
                       src="https://cdn.countryflags.com/thumbs/italy/flag-round-250.png"
                       alt="{{__('Italijanski')}}"
                       title="{{__('Italijanski')}}">
              </button>

              <button class="ml-3 outline-none" name="lang" type="submit"
                      value="fr" {{ session()->get('locale') == 'fr' ?
                  'selected' : '' }}>
                  <img width="25"
                       src="https://cdn-icons-png.flaticon.com/512/197/197560.png"
                       alt="{{__('Francuski')}}"
                       title="{{__('Francuski')}}">
              </button>

              <button class="ml-3 outline-none" name="lang" type="submit"
                      value="zh" {{ session()->get('locale') == 'zh' ?
                  'selected' : '' }}>
                  <img width="25"
                       src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Circle_Flag_of_the_People%27s_Republic_of_China.svg/2048px-Circle_Flag_of_the_People%27s_Republic_of_China.svg.png"
                       alt="{{__('Kineski')}}" title="{{__('Kineski')}}">
              </button>
              
              <button class="ml-3 outline-none" name="lang" type="submit" value="vi" {{ session()->get('locale') == 'vi' ? 'selected' : '' }}>
                <img width="30" src="<button class="ml-3 outline-none" name="lang" type="submit" value="vi" {{ session()->get('locale') == 'vi' ? 'selected' : '' }}>
                    <img width="30" src="data:image/jpeg;base64,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" alt="{{__('Tiếng Việt')}}" title="{{__('Tiếng Việt')}}">
                </button>" alt="{{__('Vietnamese')}}" title="{{__('Vietnamese')}}">
            </button>

              

              <button class="ml-3 outline-none" name="lang" type="submit"
                      value="ru" {{ session()->get('locale') == 'ru' ?
                  'selected' : '' }}>
                  <img width="25"
                       src="https://cdn.countryflags.com/thumbs/russia/flag-round-250.png"
                       alt="{{__('Ruski')}}" title="{{__('Ruski')}}">
              </button>
              

              <button class="ml-3 outline-none" name="lang" type="submit"
                      value="hi" {{ session()->get('locale') == 'hi' ?
                  'selected' : '' }}>
                  <img width="25"
                       src="https://cdn-icons-png.flaticon.com/512/197/197419.png"
                       alt="{{__('Hindi')}}" title="{{__('Hindi')}}">
              </button>
          </form>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{
                            __('Uloguj se') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{
                            __('Registruj se') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle"
                           href="#" role="button" data-bs-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end"
                             aria-labelledby="navbarDropdown">
                            <a class="dropdown-item"
                               href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Odjavi se') }}
                            </a>

                            <form id="logout-form"
                                  action="{{ route('logout') }}" method="POST"
                                  class="d-none">
                                @csrf @honeypot
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

<style>
    button {
        border: none;
    }
</style>

</html>
