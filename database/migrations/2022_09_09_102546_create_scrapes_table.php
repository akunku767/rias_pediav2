<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScrapesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scrapes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('rating');
            $table->string('review');
            $table->string('address');
            $table->string('open');
            $table->string('web');
            $table->string('phone');
            $table->string('image');
            $table->string('iframeMap');
            $table->string('slug');
            $table->string('star5');
            $table->string('star4');
            $table->string('star3');
            $table->string('star2');
            $table->string('star1');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scrapes');
    }
}
