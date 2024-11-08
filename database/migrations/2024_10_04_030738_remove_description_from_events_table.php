<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveDescriptionFromEventsTable extends Migration
{
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }

    public function down()
    {
        Schema::table('events', function (Blueprint $table) {   
            $table->text('description')->nullable();
        });
    }
}
