<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtToProduksTable extends Migration
{
    public function up()
    {
        Schema::table('produk', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::table('produk', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
