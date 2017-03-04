<?php

use Illuminate\Database\Seeder;

class Roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role' => 'administrator',
            'name' => 'Администратор'
        ]);
        DB::table('roles')->insert([
            'role' => 'user',
            'name' => 'Пользователь'
        ]);
    }
}
