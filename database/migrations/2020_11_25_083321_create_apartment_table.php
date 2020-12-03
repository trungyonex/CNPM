<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartment', function (Blueprint $table) {
            $table->increments('apid');
            $table->string('address'); /*bao gồm block mấy số mấy số tầng như C402 là block C tầng 4 phòng số 2*/
            $table->string('title');
            $table->string('image');
            $table->double('price');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return voidm ch
     */
    public function down()
    {
        Schema::dropIfExists('apartment');
    }
}
