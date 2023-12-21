<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->string('status_type');
        });

        DB::table('statuses')->insert([
            ['id' => '1', 'status_type' => 'На рассмотрении'],
            ['id' => '2', 'status_type' => 'Принято'],
            ['id' => '3', 'status_type' => 'Отклонено']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statuses');
    }
};
