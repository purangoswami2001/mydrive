<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDirectoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_directories', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('parent_id')->unsigned()->default(0);
            $table->BigInteger('user_id')->unsigned();
            $table->string('dir_name',20);
            $table->float('dir_size');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_directories');
    }
}
