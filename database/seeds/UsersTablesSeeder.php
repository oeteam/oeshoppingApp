<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
        	'name'  => 'neethu johnson',
        	'email'	=> 'support2@otelseasy.com',
        	'password'  => Hash::make('support'),
        	'remember_token' => Str::random(10),
        ]);
    }
}
