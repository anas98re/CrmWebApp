<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceivedNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('received_notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("receiver_id");
            $table->foreign("receiver_id")->references("id")->on("users");
            $table->unsignedBigInteger("notification_id");
            $table->foreign("notification_id")->references("id")->on("notifications");
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
        Schema::dropIfExists('received_notifications');
    }
}
