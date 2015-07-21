<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LocationsAddColumnsDistanceVisitedStars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->unsignedTinyInteger('star_rating');
            $table->float('distance');
            $table->timestamp('visited_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->dropColumn('star_rating');
            $table->dropColumn('distance');
            $table->dropColumn('visited_at');
        });
    }
}
