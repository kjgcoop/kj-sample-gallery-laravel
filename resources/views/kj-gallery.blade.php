@extends('master')

@section('content')

<ul id="imgs">
@foreach ($imgs as $img)
    @if ($img->is_image() && $img->enabled)
        <li><img data-file="{{ $img->filename }}" src="{{ $img->get_thumbnail() }}" class="still"></li>
    @elseif ($img->is_video() && $img->enabled)
        <li><img data-file="{{ $img->filename }}" src="{{ $img->get_thumbnail() }}" class="video"></li>
        <i class="fas fa-video"></i>
    @endif
@endforeach
</ul>

<div id="full">
    <img src="kj_images/{{ $default }}">
</div>

@endsection
