<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villas', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("numberOfRooms");
            $table->string("address");
            $table->string("Region");
            $table->integer("price");
            $table->string("phoneNumber");
            $table->text("note")->nullable();
            $table->text('image')->nullable();
            $table->integer("space")->nullable();
            $table->enum('rentOrSell', ['Availabl','rent','Sell','other']);
            $table->enum('generalType', ['villa','apartment','other']);
            $table->enum('srecialType', ['commercial','residential','investment','other']);
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign("employee_id")->references("id")->on("employees")->onDelete('set null');
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
        Schema::dropIfExists('villas');
    }
}
