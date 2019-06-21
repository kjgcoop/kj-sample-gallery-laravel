<html>
<head>
    <title>{{ $title }}</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/kj-gallery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/kj-gallery.css">
</head>

<body>

<h1>{{ $title }}</h1>

<p>Following a <a href="https://www.youtube.com/watch?v=ubfxi21M1vQ">YouTube video</a><p>

<ul id="imgs">
@foreach ($imgs as $img)
    <li><img data-file="{{ $img->filename }}" src="kj_images/th/{{ $img->filename }}"></li>
@endforeach
</ul>

<div id="full">
    <img src="kj_images/lg/{{ $default }}">
</div>

</body>
