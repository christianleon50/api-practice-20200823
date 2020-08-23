<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worker', function (Blueprint $table) {
            $table->id();
            $table->string('name',60);
            $table->string('lastname',60);
            $table->string('email',100);
            $table->string('phone',25);
            $table->string('address',250);
            $table->boolean('available');
            $table->bigInteger('labor_profile_id')
                ->unsigned();
            $table->foreign('labor_profile_id')
                ->references('id')
                ->on('labor_profile')
                ->onDelete('cascade');
            $table->bigInteger('work_experience_id')
                ->unsigned();
            $table->foreign('work_experience_id')
                ->references('id')
                ->on('work_experience')
                ->onDelete('cascade');
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
        Schema::dropIfExists('worker');
    }
}
