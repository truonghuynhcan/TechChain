<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug',255);
            $table->integer('price');
            $table->integer('sale_price')->nullable();
            $table->string('image',255);
            $table->text('description')->nullable();
            $table->integer('instock');//tồn kho
            $table->float('rating')->default(0);// đánh giá
            $table->unsignedBigInteger('category_id');// mã danh mục
            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('restrict');
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
