<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKjImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tbl = 'kj_gallery_image';

        Schema::create($tbl, function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('thumbnail');
            $table->string('filename');

            $table->boolean('enabled')->default(true);

            $table->timestamps();
        });

        // https://stackoverflow.com/questions/12736120/populating-a-database-in-a-laravel-migration-file
        DB::table($tbl)->insert(
            array(
                'id'        => '1',
                'thumbnail' => '1.jpg',
                'filename'  => '1.jpg',
//                'enabled'   => '1',
            ),
            array(
                'id'        => '2',
                'thumbnail' => '2.jpg',
                'filename'  => '2.jpg',
//                'enabled'   => '0',
            ),
            array(
                'id'        => '3',
                'thumbnail' => '3.jpg',
                'filename'  => '3.jpg',
//                'enabled'   => '1',
            ),
            array(
                'id'        => '4',
                'thumbnail' => '4.jpg',
                'filename'  => '4.jpg',
//                'enabled'   => '1',
            ),
            array(
                'id'        => '5',
                'thumbnail' => '5.jpg',
                'filename'  => '5.jpg'
            ),
            array(
                'id'        => '6',
                'thumbnail' => '6.jpg',
                'filename'  => '6.jpg'
            ),
            array(
                'id'        => '7',
                'thumbnail' => '7.jpg',
                'filename'  => '7.jpg'
            ),
            array(
                'id'        => '8',
                'thumbnail' => '8.jpg',
                'filename'  => '8.mp4'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kj_gallery_image');
    }
}
