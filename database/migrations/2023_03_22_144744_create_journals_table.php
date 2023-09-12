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
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('image')->nullable();
            $table->longText('body')->nullable();
            $table->string('issue')->nullable();
            $table->string('volume')->nullable();
            $table->string('doi')->nullable();
            $table->string('unique_code')->nullable();
            $table->string('issn')->nullable();
            $table->string('cost')->nullable();
            $table->string('slider')->default(false);
            $table->boolean('featured')->default(false);
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
        Schema::dropIfExists('journals');
    }
};
