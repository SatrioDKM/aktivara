<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('daily_activities', function (Blueprint $table) {
            $table->id();
            $table->date('agenda_date');
            $table->string('title');
            $table->string('created_by');
            $table->enum('urgency', ['Ya', 'Tidak']);
            $table->string('assigned_to');
            $table->string('category');
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('daily_activities');
    }
};
