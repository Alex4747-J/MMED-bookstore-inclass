<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeleteAtToBooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->softDeletes();
             // $table->string('title')->default(46)->change();
            // older versions of laravel do not support the change() method, so you would have to do something like this instead:
            // $table->dropColumn('title');
            // $table->string('title', 46);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropsoftDeletes();
        });
    }
}
