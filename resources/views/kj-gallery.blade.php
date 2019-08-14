@extends('master')
@extends('layouts.app');

@section('title', "KJ's Sample Gallery")

@section('gallery')
<h1>@yield('title')</h1>

<ul id="imgs">
@foreach ($imgs as $img)
    @if ($img->is_image())
<<<<<<< HEAD
        <li><img data-file="{{ $img->filename }}" src="kj_images/th/{{ $img->filename }}"></li>
=======
        <li><img data-file="{{ $img->filename }}" src="{{ $img->get_thumbnail() }}" class="still"></li>
>>>>>>> 2019_video_thumbnail_db
    @elseif ($img->is_video())
        <li><img data-file="{{ $img->filename }}" src="{{ $img->get_thumbnail() }}" class="video"></li>
    @endif
@endforeach
</ul>

<div id="full">
    <img src="kj_images/lg/{{ $default }}">
</div>

@endsection
