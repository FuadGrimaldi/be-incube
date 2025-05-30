<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_cus')->constrained('users');
            $table->foreignId('transaction_type_id')->constrained('transaction_types');
            $table->foreignId('payment_method_id')->constrained('payment_methods');
            $table->string('id_product');
            $table->float('amount');
            $table->string('transaction_code')->unique();
            $table->string('status');
            $table->timestamps();

            $table->foreign('id_product')->references('id')->on('produk')->onUpdate('no action')->onDelete('no action');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
