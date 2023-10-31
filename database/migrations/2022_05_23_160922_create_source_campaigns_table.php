<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSourceCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('source_campaigns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("source_id")->nullable();
            $table->foreign("source_id")->references("id")->on("sources")->onDelete('set null');
            $table->unsignedBigInteger("campaign_id")->nullable();
            $table->foreign("campaign_id")->references("id")->on("campaigns")->onDelete('set null');
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
        Schema::dropIfExists('source_campaigns');
    }
}
