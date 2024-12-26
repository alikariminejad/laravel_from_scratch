<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table -> after('title', function($table){
            $table -> string('dummy');
            $table -> string('dummy1');
            $table -> string('dummy2');
            });
            $table -> enum('prefix', ['mr', 'mrs', 'mis']) -> default('mr') -> comment('this can be used for prefixes.');
            $table -> float('price', 3); // 1057.234
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table -> dropColumn(['dummy','dummy1', 'dummy2']);
        });
    }
};
