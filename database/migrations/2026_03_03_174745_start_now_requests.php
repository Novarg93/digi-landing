<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('start_now_requests', function (Blueprint $table) {
            $table->id();

            $table->string('contact_person');
            $table->string('company_name');
            $table->string('email');

            $table->string('country_of_registration');
            $table->string('phone')->nullable();

            $table->text('about');

            $table->boolean('agreed_to_terms')->default(false);

            $table->string('status')->default('new'); // new | in_progress | done | spam
            $table->timestamp('read_at')->nullable();

            $table->string('ip')->nullable();
            $table->string('user_agent', 500)->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('start_now_requests');
    }
};