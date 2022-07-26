<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('about_id');
            $table->string('intro',750);
            $table->string('detail_title',100);
            $table->string('details',750);
            $table->string('img_1',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_details');
    }
}
