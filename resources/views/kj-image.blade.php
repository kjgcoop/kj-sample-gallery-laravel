@extends('home')

@section('image')
    <li><img data-file="{{ $img->filename }}" src="kj_images/th/{{ $img->filename }}"></li>
@endsection
