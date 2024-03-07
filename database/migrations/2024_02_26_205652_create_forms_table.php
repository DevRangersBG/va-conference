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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('first_name');
            $table->string('surname');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->foreignId('participant_type_id')->constrained();
            $table->string('report_title')->nullable();
            $table->string('report_file_path')->nullable(); // store the file path only
            $table->text('report_details')->nullable();
            $table->string('keywords')->nullable();
            $table->foreignId('thematic_area_id')->constrained();
            $table->tinyInteger('has_certificate')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
