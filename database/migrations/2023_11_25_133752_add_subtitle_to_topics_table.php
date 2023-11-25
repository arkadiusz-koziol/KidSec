<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSubtitleToTopicsTable extends Migration
{
    public function up()
    {
        Schema::table('topics', function (Blueprint $table) {
            $table->string('subtitle')->nullable();
        });
    }

    public function down()
    {
        Schema::table('topics', function (Blueprint $table) {
            $table->dropColumn('subtitle');
        });
    }
}
