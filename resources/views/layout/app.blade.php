<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta href="{{asset('css/app.css')}}" rel="stylesheet">
    <meta name="csrf_token" content="{{csrf_token()}}">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <div class="container">
        <main role="main">
            @hasSection ('body')
              @yield('body')  
            @endif
        </main>
    </div>
    <script src="{{asset('js/app.js')}}" type="test/javascript"></script>
</body>
</html>