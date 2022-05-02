<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSocialProviderColumnsInUsersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::table('users', function (Blueprint $table) {
        // $table->unsignedBigInteger('email_provider_id');
        //   $table->foreign('email_provider_id')
        //     ->references('id')->on('email_providers')
        //     ->onDelete('cascade');
        $table->string('provider_name')->nullable()->default();
        $table->string('provider')->nullable();
        $table->string('provider_id')->nullable();

        //$table->string('provider_token')->nullable();
        $table->text('provider_token')->nullable();
        $table->text('provider_token_refresh')->nullable();
        $table->unsignedBigInteger('provider_token_expires')->nullable();
        $table->text('provider_code')->nullable();
      });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
      Schema::table('users', function (Blueprint $table) {
         $table->dropColumn('provider_name');
         $table->dropColumn('provider');
         $table->dropColumn('provider_id');
      });
  }
}
