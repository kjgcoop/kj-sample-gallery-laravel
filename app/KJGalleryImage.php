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

    protected $exif;

    protected $mimetype;

    function __construct() {
    }

    // I wish I could do this stuff in the constructor, but $this->filename
    // hasn't been set yet.
    private function prepare() {
        $this->set_exif();
        $this->set_mimetype();
    }

    public function get_exif() {
        $this->prepare();
        return print_r($this->exif, true);
    }

    public function get_full_image() {
        return $this->full_path.'/'.$this->filename;
    }

    public function get_thumbnail() {
        return $this->thumb_path.$this->thumbnail;
    }

    public function has_exif() {
        $this->prepare();
        return !empty($this->exif);
    }

    public function is_image() {
        $this->prepare();
        return substr($this->mimetype, 0, 5) == 'image';
    }

    public function is_video() {
        $this->prepare();
        return $this->mimetype == 'video/mp4';
    }

    private function set_exif() {
        // Can't use is_image -> recursion
        if (substr($this->mimetype, 0, 5) == 'image') {
            $this->exif = exif_read_data(fopen($this->get_full_image(), 'r'));
        } else {
            $this->exif = false;
        }
    }

    private function set_mimetype() {
        $this->mimetype = mime_content_type($this->get_full_image());
    }
}
