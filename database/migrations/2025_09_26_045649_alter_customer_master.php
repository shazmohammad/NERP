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
        $table->string('seller_name')->after('mobile_no');
        $table->string('vat_no')->after('seller_name');
        $table->string('cr_no')->after('vat_no');
        $table->string('email')->after('cr_no');

    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
         Schema::table('customers', function (Blueprint $table) {
        $table->dropColumn('seller_name');
        $table->dropColumn('vat_no');
        $table->dropColumn('cr_no');
        $table->dropColumn('email');
    });
    }
};
