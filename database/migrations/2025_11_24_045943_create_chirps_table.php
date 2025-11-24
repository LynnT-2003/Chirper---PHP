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
        Schema::create('chirps', function (Blueprint $table) {
            $table->id();
            // make user_id a foreign key
            // apply a foreign key constraint - the userId must exist in users.id
            // if a user is deleted, delete all of their data(chirps) too
            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnDelete(); 
            $table->string('message', 255); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chirps');
    }
};
