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
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('flag_id')->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->softDeletes('deleted_at', precision:0);
            $table->timestamps();
        });

        Schema::create('variants', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id');
            $table->string('size', length:50)->nullable();
            $table->decimal('selling_price', 15, 2)->nullable();
            $table->decimal('cuts_price', 15, 2)->nullable();
        });

        Schema::create('product_images', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id');
            $table->string('image');
            $table->unsignedTinyInteger('image_order')->nullable();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', length:100);
            $table->text('description')->nullable();
            $table->softDeletes('deleted_at', precision:0);
            $table->timestamps();
        });

        Schema::create('flags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', length:100);
            $table->text('description')->nullable();
            $table->softDeletes('deleted_at', precision:0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('variants');
        Schema::dropIfExists('product_images');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('flags');
    }
};
