<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('contact_requests', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('email');
            $table->string('company')->nullable();
            $table->text('message');

            $table->string('status')->default('new'); // new | in_progress | done | spam
            $table->timestamp('read_at')->nullable();

            $table->string('ip')->nullable();
            $table->string('user_agent', 500)->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_requests');
    }
};