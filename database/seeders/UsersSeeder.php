<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UsersSeeder extends Seeder
{

    private $table_name = 'users';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insertData = [
            [
                'id' => 1,
                'name' => 'prueba',
                'email' => 'prueba@prueba.com',
                'password' => Hash::make('12345678')
            ],
            [
                'id' => 2,
                'name' => 'prueba2',
                'email' => 'prueba2@prueba.com',
                'password' => Hash::make('12345678')
            ],
            [
                'id' => 3,
                'name' => 'prueba3',
                'email' => 'prueba3@prueba.com',
                'password' => Hash::make('12345678')
            ]
        ];

        DB::table($this->table_name)->insert($insertData);
    }
}
