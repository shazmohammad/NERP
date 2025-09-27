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
        //
        Schema::table('customers', function (Blueprint $table) {
            $table->unsignedBigInteger('accounts_id')->after('email');
        });
        
        Schema::table('customers', function (Blueprint $table) {    
            $table->index('accounts_id');
            $table->foreign('accounts_id')->references('id')->on('accounts');        
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('customers', function (Blueprint $table) {
      // Drop foreign key first
            $table->dropForeign(['accounts_id']);

            $table->dropIndex('accounts_id');
            $table->dropColumn('accounts_id');
        });
    }
};
