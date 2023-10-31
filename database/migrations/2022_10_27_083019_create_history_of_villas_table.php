<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryOfVillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_of_villas', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("EditDate");
            $table->text("OldData")->nullable();
            $table->text("NewData")->nullable();
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign("employee_id")->references("id")->on("employees")->onDelete('set null');
            $table->unsignedBigInteger('villa_id')->nullable();
            $table->foreign("villa_id")->references("id")->on("villas")->onDelete('set null');
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
        Schema::dropIfExists('history_of_villas');
    }
}
