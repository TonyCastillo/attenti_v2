<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('descriptions')->nullable();
            $table->enum('project_status', [ '0', '1']);
            $table->string('project_password')->nullable();
            $table->enum('project_approved_status', [ '0', '1'])->nullable();
            $table->date('admin_respond_date')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();



            $table->foreign('user_id')
                ->references('id')
                ->on('users');
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
