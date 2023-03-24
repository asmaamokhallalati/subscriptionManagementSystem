<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activation_codes_groups', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('package_id');
            $table->string('group_name', 50);
            $table->tinyInteger('count');
            $table->date('start-date');
            $table->date('expire-date');
            $table->tinyInteger('price');
            $table->tinyInteger('active')->default('0')->comment('0=inactive,1=active');
            $table->tinyInteger('enterprise_id');
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
        Schema::dropIfExists('activation_codes_groups');
    }
};
