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
        Schema::table('trains', function (Blueprint $table) {
            $table->date('data_di_partenza')->after('stazione_di_arrivo');
            $table->time('orario_di_partenza')->after('data_di_partenza');
            $table->date('data_di_arrivo')->after('orario_di_partenza');
            $table->time('orario_di_arrivo')->after('data_di_arrivo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('data_di_partenza');
            $table->dropColumn('orario_di_partenza');
            $table->dropColumn('data_di_arrivo');
            $table->dropColumn('orario_di_arrivo');
        });
    }
};
