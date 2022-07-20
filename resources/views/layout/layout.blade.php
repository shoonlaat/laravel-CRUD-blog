<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('css/reset.css') }}">
    <link href="{{ url('css/layout.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>

<body>
    <header class="header">
        @include('layout.header.index')
        @include('layout.sidebar.index')
    </header>
    <div class="content">
            @yield('content-section')
    </div>
    <div>
        @include('layout.footer.index')
    </div>
    <script src="{{ url('js/lib/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ url('js/common/common.js') }}"></script>
</body>

</html>
