@extends('master')

@section('content')

<ul id="imgs">
@foreach ($imgs as $img)
    @if ($img->is_image() && $img->enabled)
        <li data-file="{{ $img->filename }}" style="background-image: url({{ $img->get_thumbnail() }});" class="still">
        @if ($img->has_exif())
            <div class="exif">
                {{ $img->get_exif() }}
            </div>
        @else
            &nbsp;
        @endif
        </li>
    @elseif ($img->is_video() && $img->enabled)
        <li data-file="{{ $img->filename }}" style="background-image: url({{ $img->get_thumbnail() }});" class="video"><i class="fas fa-video"></i></li>
    @endif
@endforeach
</ul>

<div id="full">
    <img src="kj_images/{{ $default }}">
</div>

<div id="exif_block">
</div>

@endsection
