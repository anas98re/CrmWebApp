<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_employees', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger("state")->default(1);
            $table->unsignedBigInteger("service_id")->nullable();
            $table->foreign("service_id")->references("id")->on("services")->onDelete('set null');
            $table->unsignedBigInteger("employee_id")->nullable();
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
        Schema::dropIfExists('service_employees');
    }
}
