<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->unsigned()->default(0);
            $table->integer('locale_id')->unsigned()->default(0);
            $table->string('name', 50);
            $table->string('url', 50);
            $table->string('icon', 25);
            $table->string('color', 10)->nullable();
            $table->string('slug', 50);
            $table->integer('sort');
            $table->boolean('is_active')->defualt(true);
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
        Schema::dropIfExists('menus');
    }
}
