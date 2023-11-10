<?php
use App\Models\User;
use App\Models\TipoMascota;
use App\Models\Raza;
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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150);
            $table->date('FechaNacimiento');
            $table->binary('foto');
            $table->foreignIdFor(User::class)->constrained;
            $table->foreignIdFor(TipoMascota::class)->constrained;
            $table->foreignIdFor(Raza::class)->constrained;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
