<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahKolomBaruToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('alamat')->nullable()->after('password');
            $table->string('no_hp')->nullable()->after('alamat');
            $table->string('foto')->nullable()->after('no_hp');
            $table->tinyInteger('level')->default(0)->after('foto'); //buat pengguna
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'alamat',
                'no_hp',
                'foto',
                'level'
            ]);
        });
    }
}
