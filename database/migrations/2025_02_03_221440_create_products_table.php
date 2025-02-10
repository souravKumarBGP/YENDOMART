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
            $table->string("name", 255);
            $table->string("slug", 255)->unique();
            $table->float("selling_price");
            $table->float("discount_price");
            $table->smallInteger("total_quentity");
            $table->smallInteger("available_quentity");
            $table->string("live_link", 500);
            $table->string("unit", 15);
            $table->string("category_name", 255);
            $table->string("brand_name", 255);
            $table->enum("product_status",["in stock", "out of stock", "up comming"]);
            $table->smallInteger("top_selling_position")->default(0);
            $table->string("sku", 10);
            $table->string("thumbnail_img");
            $table->json("gallary_img");
            $table->json("product_discreption");
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
