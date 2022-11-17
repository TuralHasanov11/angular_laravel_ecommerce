<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_attribute_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_attribute_value_id')->constrained('product_attribute_value')->restrictOnDelete();
            $table->foreignId('product_inventory_id')->constrained('product_inventory')->restrictOnDelete();
            $table->unique(['product_attribute_value_id', 'product_inventory_id'], 'product_attribute_value_inventory_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_attribute_values');
    }
};
