<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // companies table
      Schema::create('companies', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        
        $table->decimal('score_privacy', 2, 2);
        $table->decimal('score_security', 2, 2);

        // ToDo: store logos as pic and in just url to image
        $table->string('logo_path');
        //$table->binary('image');
        $table->boolean('is_active');
	      $table->timestamps();
      });

      //DB::statement("ALTER TABLE companies ADD image MEDIUMBLOB");
      //DB::statement("ALTER TABLE companies ADD image BLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('companies');
    }
}
