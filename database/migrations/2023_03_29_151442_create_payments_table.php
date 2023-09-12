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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user')->nullable()->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('transactionRef')->nullable();
            $table->longText('metadata');
            $table->string('payment_method');
            $table->string('reference_code');
            $table->string('amount');
            $table->string('quantity')->default(1);
            $table->string('total')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('payments');
    }
};
