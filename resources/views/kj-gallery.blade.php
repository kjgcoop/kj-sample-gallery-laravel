@extends('master')
@extends('layouts.app');

@section('title', "KJ's Sample Gallery")

@section('gallery')
<h1>@yield('title')</h1>

<ul id="imgs">
@foreach ($imgs as $img)
    @if ($img->is_image())
        <li><img data-file="{{ $img->filename }}" src="{{ $img->get_thumbnail() }}" class="still"></li>
    @elseif ($img->is_video())
        <li><img data-file="{{ $img->filename }}" src="{{ $img->get_thumbnail() }}" class="video"></li>
    @endif
@endforeach
</ul>

<div id="full">
    <img src="kj_images/lg/{{ $default }}">
</div>

@endsection
