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
        Schema::create('club_msgs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->datetime('Publish_date');

            $table->foreignId('club_id')->references('id')->on('clubs');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('club_msgs');
    }
};
