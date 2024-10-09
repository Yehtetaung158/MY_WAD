<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default("Ye Htet Aung");
            $table->text('description')->comment('about items');
            $table->decimal('price');
            $table->unsignedBigInteger('quantity');
            // $table->integer('age');
            // $table->bigInteger('views');
            // $table->float('rating');
            // $table->date('published_at');//yyyy-mm-dd
            // $table->dateTime('created_at');//yyyy-mm-dd hh:mm
            // $table->dateTime('updated_at');//yyyy-mm-dd hh:mm
            // $table->boolean('is_active'); //true(1) ,false(0)
            // $table->enum('status',['draft','published','archived']);
            // $table->json('options');
            // $table->binary('data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
