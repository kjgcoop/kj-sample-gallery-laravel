<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KJGalleryImage;

class KJGalleryController extends Controller
{
    public function index() {
        $imgs = KJGalleryImage::all();
        // pop wants an array, $imgs is an object; Hard-code for now.
//        $default = array_pop($imgs);

        return view('home', array(
            'imgs'    => $imgs,
            'default' => '1.jpg',
            'title'   => "KJ's Sample Gallery"
        ));
    }
}
