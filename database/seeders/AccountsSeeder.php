<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('accounts')->insert([
            [
                'id' => 1,
                'account_id' => 0,
                'name' => 'ASSET',
                'name_ar' => 'ASSET',
                'ledger_type' => 'H',
                'acc_type' => '1',
                'allow_edit' => 0,
                'level' => 0,
            ],
            [
                'id' => 2,
                'account_id' => 0,
                'name' => 'LIABILITY',
                'name_ar' => 'LIABILITY',
                'ledger_type' => 'H',
                'acc_type' => '2',
                'allow_edit' => 0,
                'level' => 0,
            ],
            [
                'id' => 3,
                'account_id' => 0,
                'name' => 'REVENUE',
                'name_ar' => 'REVENUE',
                'ledger_type' => 'H',
                'acc_type' => '3',
                'allow_edit' => 0,
                'level' => 0,
            ],
            [
                'id' => 4,
                'account_id' => 0,
                'name' => 'EXPENSE',
                'name_ar' => 'EXPENSE',
                'ledger_type' => 'H',
                'acc_type' => '4',
                'allow_edit' => 0,
                'level' => 0,
            ],
            [
                'id' => 5,
                'account_id' => 0,
                'name' => 'EQUITY',
                'name_ar' => 'EQUITY',
                'ledger_type' => 'H',
                'acc_type' => '5',
                'allow_edit' => 0,
                'level' => 0,
            ],
            [
                'id' => 6,
                'account_id' => 1,
                'name' => 'Current Asset',
                'name_ar' => 'Current Asset',
                'ledger_type' => 'H',
                'acc_type' => '1',
                'allow_edit' => 0,
                'level' => 0,
            ],
            [
                'id' => 7,
                'account_id' => 6,
                'name' => 'Customers',
                'name_ar' => 'Customers',
                'ledger_type' => 'H',
                'acc_type' => '1',
                'allow_edit' => 0,
                'level' => 0,
            ]
        ]);
    }
}
