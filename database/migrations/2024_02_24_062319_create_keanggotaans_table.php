<?php

use App\Models\Keahlian;
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
        Schema::create('keanggotaans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim');
            $table->string('provinsi');
            $table->string('photo')->nullable();
            $table->string('profesi');
            $table->string('asal_institusi');
            $table->integer('narasumber');
            $table->integer('custom_jurnal');
            $table->integer('supervisor');
            $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keanggotaans');
    }
};
