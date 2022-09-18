<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MessagesSeeder extends Seeder
{

    private $table_name = 'messages';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insertData = [];
        $user = 2;

        for($i = 0; $i < 10; $i++){

            if($user > 7){
                $user = 1;
            }

            $insertData[] = [
                $this->table_name.'_description' => 'Esto es una prueba de mensaje ' . strval($i),
                'users_id' => $user,
                'services_id' => 1
            ];
        }

        DB::table($this->table_name)->insert($insertData);
    }
}
