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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('名稱');
            $table->string('slug')->unique()->comment('網址');
            $table->bigInteger('parent_id')->default(0)->comment('級別 0 為最上層');
            $table->integer('sort')->default(0)->comment('排序');
            $table->boolean('is_product')->default(0)->comment('是否為產品分類 1 是 0 否');
            $table->boolean('status')->default(1)->comment('狀態 1 啟用 0 停用');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
