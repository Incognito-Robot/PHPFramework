<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskuserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_user', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->id()->nullable(false);
          $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
          $table->foreignId('task_id')->nullable()->constrained('tasks')->onDelete('set null');
          $table->unique(['user_id','task_id']);
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
        Schema::dropIfExists('taskuser');
    }
}
