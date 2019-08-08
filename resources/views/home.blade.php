@extends('master')

@section('title', "KJ's Sample Gallery")

@section('content')
<h1>@yield('title')</h1>

<p>Following a <a href="https://www.youtube.com/watch?v=ubfxi21M1vQ">YouTube video</a><p>

<ul id="imgs">
@foreach ($imgs as $img)
    <li><img data-file="{{ $img->filename }}" src="kj_images/th/{{ $img->filename }}"></li>
@endforeach
</ul>

<div id="full">
    <img src="kj_images/lg/{{ $default }}">
</div>

@endsection
