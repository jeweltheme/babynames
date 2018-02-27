<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBabyNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('baby_names', function (Blueprint $table) {
            $table->increments('id');
            $table->string('m_english');
            $table->string('m_bangla');
            $table->string('m_arabic');
            $table->string('m_hindi');
            $table->string('m_urdu');
            $table->increments('name_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baby_names');
    }
}
