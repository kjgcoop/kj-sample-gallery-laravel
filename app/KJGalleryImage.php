<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KJGalleryImage extends Model
{
    // Convention leads it to exepct a table named KJGalleryImages. Disabuse it
    // of that notion.
    // https://stackoverflow.com/questions/49625676/how-to-declare-a-different-database-connection-in-laravel-controller
    protected $table = 'kj_gallery_image';

}
