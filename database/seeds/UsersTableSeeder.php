<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = [
        	'username' => 'admin',
        	'password' => Hash::make('admin')
        ];
        DB::table('user')->insert($table);
    }
}
