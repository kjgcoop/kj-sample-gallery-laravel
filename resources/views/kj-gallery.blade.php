@extends('master')
@extends('layouts.app');

@section('title', "KJ's Sample Gallery")

@section('gallery')
<h1>@yield('title')</h1>

<ul id="imgs">
@foreach ($imgs as $img)
    @if ($img->is_image())
        <li><img data-file="{{ $img->filename }}" src="kj_images/th/{{ $img->filename }}"></li>
    @elseif ($img->is_video())
        <li>
            <video width="200" height="200" controls>
                <source data-file="{{ $img->filename }}" src="kj_images/{{ $img->filename }}" type="video/mp4">
                Your browser doesn't support the video tag.
            </video>
        </li>
    @endif
@endforeach
</ul>

<div id="full">
    <img src="kj_images/lg/{{ $default }}">
</div>

@endsection
