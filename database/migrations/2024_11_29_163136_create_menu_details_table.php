<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('menu_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id')->constrained()->onDelete('cascade');
            $table->string('stext')->nullable();
            $table->string('enstext')->nullable();
            $table->text('text')->nullable();
            $table->string('link')->nullable();
            $table->string('enlink')->nullable();
            $table->text('icon')->nullable();
            $table->string('pic')->nullable();
            $table->string('video')->nullable();
            $table->date('StartDate')->nullable();
            $table->time('StartTime')->nullable();
            $table->date('EndDate')->nullable();
            $table->time('EndTime')->nullable();
            $table->text('Keyword')->nullable();
            $table->text('Desk')->nullable();
            $table->boolean('tf')->default(0);
            $table->boolean('deltf')->default(0); // حذف نرم
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('menu_details');
    }
};
