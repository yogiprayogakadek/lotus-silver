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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user', 10);
            $table->string('name');
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id_role')->on('roles');
            $table->text('place_birth', 50);
            $table->date('date_birth');
            $table->string('gender', 20);
            $table->char('phone', 20);
            $table->text('address');
            $table->string('email', 50)->unique();
            $table->string('password', 100);
            $table->string('photo', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
