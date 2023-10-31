<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email")->unique();
            $table->string("phone");
            $table->tinyInteger("seen")->default(0);
            $table->string("profit_amount");
            $table->enum('state', ['Undefined','No_Unswer','Meeting','Follow_up','Cold','Deal']);
            $table->string("address");
            $table->date("arrive_date");
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign("employee_id")->references("id")->on("employees")->onDelete('set null');
            $table->text("description")->nullable();
            $table->unsignedBigInteger("service_id")->nullable();
            $table->foreign("service_id")->references("id")->on("services")->onDelete('set null');
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
        Schema::dropIfExists('leads');
    }
}
