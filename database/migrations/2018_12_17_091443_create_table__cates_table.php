<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('alias');
            $table->integer('status')->nullable();
            $table->integer('parent_id');
            $table->integer('type')->nullable();
            $table->integer('menu_top')->nullable();
            $table->integer('menu_right')->nullable();
            $table->integer('icon')->nullable();
            $table->integer('footer')->nullable();
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('content')->nullable();
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
        Schema::dropIfExists('cates');
    }
}
