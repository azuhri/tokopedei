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
            $table->bigInteger("seller_id")->unsigned()->index();
            $table->foreign("seller_id")->references("id")->on("users");
            $table->string("transaction_code")->index();
            $table->string("order_name");
            $table->string("address");
            $table->string("phonenumber");
            $table->timestamps();
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
