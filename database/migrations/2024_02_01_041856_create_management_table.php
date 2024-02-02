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
        Schema::create('management', function (Blueprint $table) {
            $table->id();
            $table->string('users');
            $table->string('clients');
            $table->string('jobs');
            $table->string('type_jobs');
            $table->string('projects');
            $table->string('service_offerings');
            $table->string('service_requests');
            $table->string('payments');
            $table->string('phurcase_orders');
            $table->string('orders');
            $table->string('bank_accounts');
            $table->bigInteger('no_rekenings');
            $table->bigInteger('no_handphones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('management');
    }
};
