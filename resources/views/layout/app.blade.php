<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf_token" content="{{csrf_token()}}">
    <title>Cadastro de Produtos</title>
    <style>
        body{
            padding: 29px;
        }
        .navbar{
            margin-bottom: 29px;
        }
    </style>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
    <div class="container">
        @component('component_navibar', ["current" => $current])
            
        @endcomponent
        <main role="main">
            @hasSection ('body')
              @yield('body')  
            @endif
        </main>
    </div>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>