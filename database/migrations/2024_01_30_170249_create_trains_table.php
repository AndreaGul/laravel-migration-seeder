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
    Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda',60);
            $table->string('stazione_di_partenza',60);
            $table->string('stazione_di_arrivo',60);
            $table->datetime('orario_di_partenza');
            $table->datetime('orario_di_arrivo');
            $table->char('codice_treno',8);
            $table->tinyinteger('numero_carrozze')->unsigned();
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(true);

             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
