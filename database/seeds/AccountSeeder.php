<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Account;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Account::create([
        	'username' => 'admin',
        	'password' => Hash::make('admin'),
        	'role' => 'admin',
        ]);
    }
}
