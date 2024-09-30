<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionPlansTable extends Migration
{
    public function up()
    {
        Schema::create('production_plans', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->enum('status', ['planned', 'in_progress', 'completed']);
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('production_plans');
    }
}
