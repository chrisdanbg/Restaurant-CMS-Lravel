<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('subtitle');

            $table->string('itemOneName');
            $table->text('itemOneDescription');
            $table->float('itemOnePrice', 8, 2);

            $table->string('itemTwoName');
            $table->text('itemTwoDescription');
            $table->float('itemTwoPrice', 8, 2);

            $table->string('itemThreeName');
            $table->text('itemThreeDescription');
            $table->float('itemThreePrice', 8, 2);

            $table->longText('about');

            $table->string('address');
            $table->string('phone');
            $table->string('reSphone');
            $table->string('email');
            
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
        Schema::dropIfExists('home_items');
    }
}
