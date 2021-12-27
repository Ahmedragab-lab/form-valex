<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            [
                'name' => 'wolf',
                'email' => 'ahmedragabyasin2020@gmail.com',
                'password' => bcrypt('258258258'),
                // 'image'=>'wolf.jpg',
            ],
            [
                'name' => 'mohmed',
                'email' => 'mohmed@gmail.com',
                'password' => bcrypt('258258258'),
                // 'image'=>'img_3.png',
            ],
        ]);
    }
}
