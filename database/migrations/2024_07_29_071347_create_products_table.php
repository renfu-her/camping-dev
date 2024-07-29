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
            $table->string('name')->comment('名稱');
            $table->string('description')->nullable()->comment('描述');
            $table->longText('content')->nullable()->comment('內容');
            $table->string('image')->nullable()->comment('圖片');
            $table->integer('sort')->default(0)->comment('排序');
            $table->boolean('status')->default(1)->comment('狀態 1 啟用 0 停用');
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
