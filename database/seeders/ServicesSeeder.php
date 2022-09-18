<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ServicesSeeder extends Seeder
{
    private $table_name = 'services';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $insertData = [];
        $user = 1;

        for($i = 0; $i < 20; $i++){

            if($user > 7){
                $user += 1;
            }

            $insertData[] = [
                $this->table_name.'_name' => 'prueba' . strval($i),
                $this->table_name.'_description' => 'Esto es una prueba ' . strval($i),
                'users_id' => $user,
            ];
        }

        DB::table($this->table_name)->insert($insertData);
    }
}
