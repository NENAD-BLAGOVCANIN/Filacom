<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('product_attributes', function (Blueprint $table) {
            $table->id();
    
            $table->foreignId('shop_product_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('attribute_id')->nullable()->constrained()->cascadeOnDelete();

            $table->integer('extra_cost')->default(0);
            $table->timestamps();

        });
    }
    
    public function down()
    {
        Schema::dropIfExists('product_attributes');
    }
};
