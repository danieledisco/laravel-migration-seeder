<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('azienda', 100)->nullable();
            $table->string('stazione_di_partenza', 100)->nullable();
            $table->string('stazione_di_arrivo', 100)->nullable();
            $table->date('giorno_di_partenza')->nullable();
            $table->time('orario_di_partenza', $precision = 0)->nullable();
            $table->time('orario_di_arrivo', $precision = 0)->nullable();
            $table->string('codice_treno', 20)->nullable();
            $table->tinyInteger('numero_carrozze')->unsigned()->nullable();
            $table->boolean('in_orario')->nullable();
            $table->boolean('cancellato')->nullable();
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
