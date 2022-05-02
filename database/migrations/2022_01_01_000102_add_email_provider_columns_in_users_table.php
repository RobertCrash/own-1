<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmailProviderColumnsInUsersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::table('users', function (Blueprint $table) {
        $table->string('provider_imap_srv')->nullable();
        $table->string('provider_imap_port')->nullable();
        $table->string('provider_imap_ssl')->nullable();
        $table->string('provider_smtp_srv')->nullable();
        $table->string('provider_smtp_port')->nullable();
        $table->string('provider_smtp_ssl')->nullable();
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
        $table->dropColumn('provider_imap_srv');
        $table->dropColumn('provider_imap_port');
        $table->dropColumn('provider_imap_ssl');
        $table->dropColumn('provider_smtp_srv');
        $table->dropColumn('provider_smtp_port');
        $table->dropColumn('provider_smtp_ssl');
      });
  }
}
