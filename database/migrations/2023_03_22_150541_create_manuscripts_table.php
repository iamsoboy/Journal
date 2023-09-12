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
        Schema::create('manuscripts', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('other_names')->nullable();
            $table->string('surname');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('postal_code')->nullable();
            $table->string('country');
            $table->string('profession')->nullable();
            $table->string('academic_degree')->nullable();
            $table->string('file_name')->nullable();
            $table->string('journal')->nullable();
            $table->string('reference')->nullable();
            $table->longText('comment')->nullable();
            $table->longText('attachment')->nullable();
            $table->tinyInteger('status')->nullable();
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
        Schema::dropIfExists('manuscripts');
    }
};
