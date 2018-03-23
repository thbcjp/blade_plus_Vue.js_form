<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MessageBoard</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @if (env('APP_DEBUG'))
        <script src="{{ asset('vue.js') }}"></script>
    @else
        <script src="{{ asset('vue.min.js') }}"></script>
    @endif
</head>
<body>
    @include('commons.navbar')

    <div class="container">
        @include('commons.error_messages')

        @yield('content')
    </div>
    <div>
        <div class="container" id="app">
        @{{ message }}
    </div>
    <script>
      var app = new Vue({
            el: '#app',
            data: {
                message: 'Hello Vue!'
            }
        })
    </script>
    </div>
</body>
</html>