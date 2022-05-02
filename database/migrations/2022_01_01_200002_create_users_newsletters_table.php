<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersNewslettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // footprints table
      Schema::create('users_newsletters', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->foreign('user_id')
          ->references('id')->on('users')
          ->onDelete('cascade');
        $table->unsignedBigInteger('company_id');
        $table->foreign('company_id')
          ->references('id')->on('companies')
          ->onDelete('cascade');
        $table->boolean('is_active');
        //$table->boolean('is_reclaimed');
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
        Schema::dropIfExists('users_newsletters');
    }
}
