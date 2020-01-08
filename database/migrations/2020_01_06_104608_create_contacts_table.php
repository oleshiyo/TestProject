<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('site')->nullable();
            $table->string('address')->nullable();
            $table->bigInteger('company_id')->unsigned()->index()->nullable();
            $table->bigInteger('person_id')->unsigned()->index()->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('company_id')->references('id')->on('companies')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('person_id')->references('id')->on('persons')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
