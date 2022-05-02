<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesDataTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // ... table
      Schema::create('companies_data_types', function (Blueprint $table) {
        $table->id();
        $table->string('type');
        $table->string('name');
        $table->unsignedBigInteger('company_id');
        $table->foreign('company_id')
          ->references('id')->on('companies')
          ->onDelete('cascade');
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
      Schema::dropIfExists('companies_data_types');
    }
}
