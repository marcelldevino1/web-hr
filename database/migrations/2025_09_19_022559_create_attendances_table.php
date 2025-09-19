<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete(); // karyawan
            $table->date('date'); // tanggal absensi
            $table->time('check_in')->nullable(); // jam masuk
            $table->time('check_out')->nullable(); // jam pulang
            $table->integer('overtime')->default(0); // durasi lembur (menit/jam)
            $table->enum('status', ['hadir', 'cuti', 'izin', 'sakit', 'alpha'])->default('hadir');
            $table->text('notes')->nullable(); // keterangan tambahan
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
