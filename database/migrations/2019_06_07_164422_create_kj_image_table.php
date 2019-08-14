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
            $table->timestamps();

            $table->string('filename');

        });

    // https://stackoverflow.com/questions/12736120/populating-a-database-in-a-laravel-migration-file
    DB::table($tbl)->insert(
        array(
            'id'       => '1',
            'filename' => '1.jpg'
        ),
        array(
            'id'       => '2',
            'filename' => '2.jpg'
        ),
        array(
            'id'       => '3',
            'filename' => '3.jpg'
        ),
        array(
            'id'       => '4',
            'filename' => '4.jpg'
        ),
        array(
            'id'       => '5',
            'filename' => '5.jpg'
        ),
        array(
            'id'       => '6',
            'filename' => '6.jpg'
        ),
        array(
            'id'       => '7',
            'filename' => '7.jpg'
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
