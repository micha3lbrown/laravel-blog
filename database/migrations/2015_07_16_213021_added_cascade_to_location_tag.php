<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddedCascadeToLocationTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('location_tag', function (Blueprint $table) {

            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');

            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('location_tag', function (Blueprint $table) {

            $table->foreign('location_id')->references('id')->on('locations')->onDelete('no action');

            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('no action');

        });
    }
}
