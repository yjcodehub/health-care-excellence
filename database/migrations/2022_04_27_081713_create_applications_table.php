<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            
            $table->id();
            $table->string('lang');
            // $table->string('how_do_know');
            $table->string('firstname');
            $table->string('lastName');
            $table->string('addLine1');
            $table->string('addLine2')->nullable();
            $table->string('city');
            $table->string('state');
            $table->integer('zipCode');
            $table->string('email');
            $table->string('tel');
            $table->string('textOk')->nullable();
            $table->string('community');
            $table->string('languages');
            $table->string('language_other')->nullable();
            $table->string('family');
            $table->string('same_household')->nullable();
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
        Schema::dropIfExists('applications');
    }
}
