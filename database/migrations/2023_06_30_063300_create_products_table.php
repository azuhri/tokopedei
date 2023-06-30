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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->unsigned()->index();
            $table->foreign("user_id")->references("id")->on("users");
            $table->string("product_name");
            $table->text("description")->nullable();
            $table->integer("harga");
            $table->integer("stok");
            $table->text("link");
            $table->integer("total_likes");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
