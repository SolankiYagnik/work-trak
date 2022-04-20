<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('sur_name');
            $table->integer('telephone');
            $table->integer('telephone2');
            $table->string('email')->unique();
            $table->string('address1');
            $table->string('address2');
            $table->string('address3');
            $table->string('town');
            $table->string('postcode');
            $table->string('preferred_appointment_time');
            $table->string('source_type');
            $table->string('source_name');
            $table->string('windows');
            $table->string('doors');
            $table->string('conservatory');
            $table->string('porch');
            $table->string('fsg_sides');
            $table->string('other');
            $table->string('product_notes');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leads');
    }
}
