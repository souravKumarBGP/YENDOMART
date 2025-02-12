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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->string("product_id");
            $table->string("product_name");
            $table->string("thumbnail_img");
            $table->string("current_payment");
            $table->string("payable_amount");
            $table->string("total_amount");
            $table->enum("payment_methods", ["cod", "online"]);
            $table->string("payment_id")->nullable();
            $table->string("order_id");
            $table->enum("payment_status", ["panding", "success", "failed", "canciled"])->default("panding");
            $table->enum("is_order_cancle", ["yes", "no"])->default("no");
            $table->enum("order_status", ["panding", "delivered"])->default("panding");
            $table->timestamps();

            // Create relations
            $table->foreign("user_id")->references("id")->on("users")->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
