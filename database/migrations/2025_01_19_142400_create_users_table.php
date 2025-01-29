<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("full_name", 100);
            $table->string("email", 100)->unique();
            $table->string("phone", 10)->nullable();
            $table->string("countary", 100)->default("india")->nullable();
            $table->string("state", 100)->nullable();
            $table->string("district", 100)->nullable();
            $table->string("pincode", 10)->nullable();
            $table->string("famous_place", 255)->nullable();
            $table->text("delevery_address")->nullable();
            $table->string("password", 100);
            $table->string("profile_img");
            $table->enum("role", ["admin", "customer"])->default("customer");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
