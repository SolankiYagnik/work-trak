<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableLeadsChangeMultipleColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->string('town')->nullable()->change();
            $table->time('preferred_appointment_time')->nullable()->change();
            $table->string('source_type')->nullable()->change();
            $table->string('source_name')->nullable()->change();
            $table->string('windows')->nullable()->change();
            $table->string('doors')->nullable()->change();
            $table->string('fsg_sides')->nullable()->change();
            $table->string('product_notes')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
