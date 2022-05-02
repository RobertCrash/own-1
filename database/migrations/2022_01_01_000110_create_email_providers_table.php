<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // table
      Schema::create('email_providers', function (Blueprint $table) {
        $table->id();
        // $table->unsignedBigInteger('xxx');
        // $table->foreign('xxx')
        //   ->references('id')->on('xxx')
        //   ->onDelete('cascade');
        $table->string('name');
        //$table->binary('image');
        $table->string('server_imap');
        $table->string('server_imap_port');
        $table->string('server_imap_ssl');
        $table->string('server_smtp');
        $table->string('server_smtp_port');
        $table->string('server_smtp_ssl');
        $table->boolean('is_active');
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
        Schema::dropIfExists('email_providers');
    }
}
