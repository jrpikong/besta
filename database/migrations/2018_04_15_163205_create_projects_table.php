<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('service_id',false,true);
            $table->string('project_name');
            $table->string('location')->nullable();
            $table->longText('description');
            $table->string('project_cost')->nullable();
            $table->string('clinet_name')->nullable();
            $table->string('cover_image');
            $table->longText('all_images');
            $table->string('general_progress')->nullable();
            $table->string('progress_phase1')->nullable();
            $table->string('progress_phase2')->nullable();
            $table->string('progress_phase3')->nullable();
            $table->timestamps();

            $table->foreign('service_id')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
