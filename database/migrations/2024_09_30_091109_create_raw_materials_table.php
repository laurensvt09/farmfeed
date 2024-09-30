<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawMaterialsTable extends Migration
{
    public function up()
    {
        Schema::create('raw_materials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('current_stock');
            $table->integer('minimum_stock');
            $table->string('quality_status');
            $table->foreignId('production_order_id')->constrained('production_plans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('raw_materials');
    }
}
