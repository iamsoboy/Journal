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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('journal_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('image')->nullable();
            $table->longText('abstract')->nullable();
            $table->string('unique_code')->nullable();
            $table->string('issn')->nullable();
            $table->string('doi')->nullable();
            $table->longText('keywords')->nullable();
            $table->longText('authors');
            $table->longText('attachment')->nullable();
            $table->longText('references')->nullable();
            $table->string('cost')->nullable();
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
        Schema::dropIfExists('articles');
    }
};
