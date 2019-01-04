<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('alias');
            $table->integer('num');
            $table->integer('price_old');
            $table->integer('price_new')->nullable();
            $table->integer('percent')->nullable();
            $table->string('avatar');
            $table->integer('home')->nullable();
            $table->integer('new')->nullable();
            $table->integer('hot')->nullable();
            $table->integer('best_sale')->nullable();
            $table->integer('status');
            $table->string('title');
            $table->text('introduction');
            $table->longtext('content');
            $table->string('keywords');
            $table->string('description');
            $table->integer('cate_id')->unsigned();
            $table->foreign('cate_id')->references('id')->on('cates');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('view')->nullable();
            $table->integer('cart')->nullable();
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
