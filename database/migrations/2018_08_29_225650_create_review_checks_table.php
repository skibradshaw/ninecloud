<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_checks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('source_id')->unsigned()->index('ix_source_id');
            $table->dateTime('check_date');
            $table->integer('review_count');
            $table->float('current_rating', 53, 0)->nullable();
            $table->integer('current_rank')->nullable();
            $table->integer('total_ranked')->nullable();
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
        Schema::dropIfExists('review_checks');
    }
}
