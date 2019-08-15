<html>
<head>
    <title>KJ's Sample Laravel Gallery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/2c245143cb.js"></script>
    <script src="/js/kj-gallery.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/kj-gallery.css">
    <link href="http://localhost:8000/css/app.css" rel="stylesheet">
</head>

<body>
    @include('layouts.nav')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>

