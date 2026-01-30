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
        Schema::create('emergency_report_history', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('report_id');
    $table->unsignedBigInteger('changed_by');
    $table->enum('old_status',['pending','in_progress','resolved']);
    $table->enum('new_status',['pending','in_progress','resolved']);
    $table->timestamp('timestamp')->useCurrent();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emergency_report_histories');
    }
};
