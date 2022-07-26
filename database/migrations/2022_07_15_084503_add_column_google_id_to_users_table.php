<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnGoogleIdToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('google_id')->after('email')->nullable();
            $table->text('avatar')->after('google_id')->default("img/avatar.jpg");
        });

        DB::table('users')->insert(
            array(
                'name' => 'SAdmin Rias Pedia',
                'role_id' => '1',
                'email' => 'admin@riaspedia.com',
                'password' => bcrypt('12345678'),
                'avatar' => 'img/avatar.jpg',
            )
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('google_id');

        });
    }
}
