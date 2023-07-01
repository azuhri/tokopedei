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
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("transaction_id")->unsigned()->index();
            $table->foreign("transaction_id")->references("id")->on("transactions");
            $table->bigInteger("product_id")->unsigned()->index();
            $table->foreign("product_id")->references("id")->on("products");
            $table->integer("qty");
            $table->integer("item_price");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
