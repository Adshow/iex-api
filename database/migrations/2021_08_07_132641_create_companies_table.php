<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            
            $table->string('symbol')->nullable();
            $table->string('companyName')->nullable();
            $table->integer('employees')->nullable();
            $table->string('exchange')->nullable();
            $table->string('industry')->nullable();
            $table->string('website')->nullable();
            $table->text('description')->nullable();
            $table->string('CEO')->nullable();
            $table->string('securityName')->nullable();
            $table->string('issueType')->nullable();
            $table->string('sector')->nullable();
            $table->integer('primarySicCode')->nullable();
            $table->string('address')->nullable();
            $table->string('address2')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->nullable();
            $table->string('phone')->nullable();

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
        Schema::dropIfExists('companies')->nullable();
    }
}
