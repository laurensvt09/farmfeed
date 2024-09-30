<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSamplesTable extends Migration
{
    public function up()
    {
        Schema::create('samples', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->string('result');
            $table->string('quality_status');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('production_order_id')->constrained('production_plans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('samples');
    }
}
