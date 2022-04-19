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
        Schema::table('users', function (Blueprint $table) {
            $table->integer('votes')->after('email');

            $table->string('name', 50)->nullable()->change();

            Schema::table('users', function (Blueprint $table) {
                $table->renameColumn('role', 'new_role');
            });
            
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
            $table->dropColumn('votes');

            $table->string('name', 255)->change();

            Schema::table('users', function (Blueprint $table) {
                $table->renameColumn('new_role', 'role');
            });
        });
        
    }
};
