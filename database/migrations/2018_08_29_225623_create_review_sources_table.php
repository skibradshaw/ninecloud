<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_sources', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned()->index('ix_client_id');
            $table->string('source_name');
            $table->string('source_username')->nullable();
            $table->string('source_password')->nullable();
            $table->text('source_identifier')->nullable();
            $table->text('url')->nullable();
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
        Schema::dropIfExists('review_sources');
    }
}
