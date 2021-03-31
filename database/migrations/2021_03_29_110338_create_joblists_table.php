<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoblistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joblists', function (Blueprint $table) {
            $table->id();
            $table->string('jobTitle');
            $table->string('jobArea');
            $table->string('jobCategory');
            $table->string('exceptedPay');
            $table->integer('user_id');
        });
    }
    public function down()
    {
        Schema::dropIfExists('joblists');
    }
}
