<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrlShorteningVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('url_shortening_visits', function (Blueprint $table) {
            $table->string('url_shortening_id', 8);
            $table->foreign('url_shortening_id')
                ->references('id')->on('url_shortenings')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('ip_address');
            $table->string('user_agent');
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
        Schema::dropIfExists('url_shortening_visits');
    }
}
