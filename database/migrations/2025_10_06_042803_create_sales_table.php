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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no')->unique();
            $table->date('date');
            $table->string('hdate');
            $table->string('time');
            $table->integer('branch_id');
            $table->unsignedBigInteger('acc_id');
            $table->string('acc_code');
            $table->string('acc_name');
            $table->string('vat_no');
            $table->string('id_no');
            $table->decimal('total_amount',18,2);
            $table->decimal('total_vat',18,2);
            $table->decimal('net_total',18,2);
            $table->timestamps();
        });

        
        Schema::table('sales', function (Blueprint $table) {    
            $table->index('acc_id');
            $table->foreign('acc_id')->references('id')->on('accounts');     
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::table('sales', function (Blueprint $table) {
            $table->dropForeign(['acc_id']);
            $table->dropIndex(['acc_id']);
        });

        Schema::dropIfExists('sales');
    }
};
