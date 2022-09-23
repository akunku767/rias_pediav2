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
            $table->unsignedBigInteger('user_id')->default("1");
            $table->string('name');
            $table->string('rating', 3);
            $table->integer('review');
            $table->text('address');
            $table->string('open');
            $table->text('web');
            $table->string('phone');
            $table->text('image');
            $table->text('iframeMap');
            $table->text('slug');
            $table->string('star5', 15);
            $table->string('star4', 15);
            $table->string('star3', 15);
            $table->string('star2', 15);
            $table->string('star1', 15);
            $table->integer('views')->default(0);
            $table->text('created', 25);
            $table->text('updated', 25);
            $table->string('epoch_time');
            $table->foreign('user_id')
            ->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('scrapes');
    }
}
