<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewNegativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_negatives', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('source_id')->unsigned()->index('ix_source_id');
            $table->float('rating', 53, 0)->nullable();
            $table->text('link_to_review')->nullable();
            $table->text('review_text')->nullable();
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
        Schema::dropIfExists('review_negatives');
    }
}
