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
        Schema::table('users', function (Blueprint $table) {
            
            $table->foreignId('desa_id')->nullable();
            $table->foreign('desa_id')
            ->references('id')
            ->on('desa_profiles')
            ->cascadeOnDelete();

            $table->char('province_id', 2)->nullable;
            $table->foreign('province_id')
                    ->references('id')
                    ->on('provinces')
                    ->onUpdate('cascade')->onDelete('restrict')->nullable;
                    
            $table->char('regency_id', 4);
            $table->foreign('regency_id')
                    ->references('id')
                    ->on('regencies')
                    ->onUpdate('cascade')->onDelete('restrict');

            $table->char('district_id', 7)->nullable;
            $table->foreign('district_id')
                ->references('id')
                ->on('districts')
                ->onUpdate('cascade')->onDelete('restrict');

           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
