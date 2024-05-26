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
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->string('customer_name', length:100);
            $table->string('customer_address')->nullable();
            $table->string('shipping_address')->nullable();
            $table->string('phone_number', length:25)->nullable();
            $table->decimal('shipping_cost', 15, 2)->nullable();
            $table->decimal('discount', 15, 2)->nullable();
            $table->text('notes')->nullable();
            $table->enum('status', ['pending', 'processing', 'shipped', 'completed', 'canceled'])->nullable();
            $table->timestamps();
        });

        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('product_id')->nullable();
            $table->unsignedInteger('quantity');
            $table->string('variant', length:50)->nullable();
            $table->decimal('price', 15, 2)->nullable();
        });

        Schema::create('attachment_files', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id');
            $table->string('filename');
            $table->string('filepath');
            $table->string('filesize');
            $table->string('content_type');
        });

        Schema::create('quotations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id')->nullable();
            $table->string('reference', length:50);
            $table->date('issue_date');
            $table->text('notes')->nullable();
            $table->string('signed_by', length:100)->nullable();
            $table->unsignedBigInteger('created_by');
            $table->timestamps();
        });

        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id')->nullable();
            $table->string('reference', length:50);
            $table->date('issue_date');
            $table->text('notes')->nullable();
            $table->string('signed_by', length:100)->nullable();
            $table->unsignedBigInteger('created_by');
            $table->timestamps();
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
