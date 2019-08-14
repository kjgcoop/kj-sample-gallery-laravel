<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KJGalleryImage extends Model
{
    // Convention leads it to exepct a table named KJGalleryImages. Disabuse it
    // of that notion.
    // https://stackoverflow.com/questions/49625676/how-to-declare-a-different-database-connection-in-laravel-controller
    protected $table = 'kj_gallery_image';

    protected $thumb_path = 'kj_images/th/';
    protected $full_path  = 'kj_images/';

    protected $mimetype;

    function __construct() {
        // Can't put this here because $this->filename hasn't been populated yet.
//        $this->mimetype = mime_content_type($this->filename);
    }

    public function get_thumbnail() {
        return $this->thumb_path.$this->thumbnail;
    }

    function is_image() {
        $this->mimetype = mime_content_type($this->full_path.'/'.$this->filename);
        return substr($this->mimetype, 0, 5) == 'image';
    }

    function is_video() {
        $this->mimetype = mime_content_type($this->full_path.'/'.$this->filename);
        return $this->mimetype == 'video/mp4';
    }


}
