@extends('master')

@section('content')

<div class="head">Thumbnails</div>
<ul id="imgs">
@foreach ($imgs as $img)
    @include('kj-image', array(
        'img' => $img
    ))
@endforeach
</ul>

<div class="head">Full-size Image</div>
<div id="full">
    <img src="kj_images/{{ $default }}">
</div>

<div id="exif_block">
</div>

@endsection
