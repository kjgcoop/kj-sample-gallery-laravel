    @if ($img->is_image() && $img->enabled)
        <li data-file="{{ $img->filename }}" style="background-image: url({{ $img->get_thumbnail() }});" class="still">
        @if ($img->has_exif())
            <div class="exif">
                <div class="head">Exif Data</div>
                @foreach ($img->get_exif() as $key => $value)
                    @if (!is_array($value))
                        <div class="exif_line">
                            <div class="exif_key">{{ $key }}</div>
                            <div class="exif_value">{{ $value }}&nbsp;</div>
                        </div>
                    @endif
                @endforeach
            </div>
        @else
            &nbsp;
        @endif
        </li>
    @elseif ($img->is_video() && $img->enabled)
        <li data-file="{{ $img->filename }}" style="background-image: url({{ $img->get_thumbnail() }});" class="video"><i class="fas fa-video"></i></li>
    @endif
