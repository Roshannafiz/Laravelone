<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cat_id');
            $table->integer('subcat_id');
            $table->integer('brand_id');
            $table->integer('unit_id');
            $table->integer('size_id');
            $table->integer('color_id');
            $table->string('name');
            $table->string('slug');
            $table->string('short_description')->nullable();
            $table->string('description');
            $table->float('regular_price')->nullable();
            $table->float('seal_price');
            $table->string('SKU');
            $table->enum('stock_status', ['instock', 'outofstock']);
            $table->boolean('featured')->default(false);
            $table->integer('quantity')->default(100)->nullable();
            $table->string('product_image');
            $table->string('gallery_image')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
