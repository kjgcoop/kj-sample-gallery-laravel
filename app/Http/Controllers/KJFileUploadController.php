<?php
// https://www.5balloons.info/example-file-upload-validation-laravel-5-6/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\KJGalleryImage;

class KJFileUploadController extends Controller
{
    protected $gallery_dir;
    protected $thumbnail_dir;

    public function __construct() {
        $this->gallery_dir = public_path('kj_images');
        $this->thumbnail_dir = $this->gallery_dir.'/th';
    }

    //
    public function form() {
        return view('kj-upload-form');
    }

    public function images_to_db($name) {
        $image = new KJGalleryImage();
        // Thumbnail and full-size image have the same name unless it's a video,
        // the directory structure tells us which is which.
        // @todo Video thumbnails of some kind
        $image->filename  = $name;


//        if ($image->is_video()) {
        if (mime_content_type($this->gallery_dir.'/'.$name) == 'video/mp4') {
            $image->thumbnail = $this->thumbnail_dir.'/video.png';
        } else {
            $image->thumbnail = $name;
        }

        $image->save();

    }

    public function process(Request $request) {
        $request->validate([
            // https://www.webslesson.info/2018/02/image-file-upload-in-laravel-with-validation.html
            'fileToUpload' => 'required|mimes:jpg,jpeg,png,gif,mp4|max:20480',
        ]);

        $request->fileToUpload->store('uploads');

        // Store the base image
        $image    = $request->file('fileToUpload');
        $new_name = time() . '_' . rand() . '.' . $image->getClientOriginalExtension();

        $image->move($this->gallery_dir, $new_name);

        // Make thumbnail
        $img = \Image::make($this->gallery_dir.'/'.$new_name);

        $img->fit(100);

        $img->save($this->thumbnail_dir.'/'.$new_name);

        $this->images_to_db($new_name);

        return back()
            ->with('success','
                You have successfully upload an image.
            ');
//                <p><img src="'.public_path('images').'/'.$new_name.'" width="200"></p>
    }

}
