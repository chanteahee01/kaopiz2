<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
            	'title' => 'Nguyen Thi Thu Ha',
            	'content' => 'thuha@gmail.com',
            	
            ],
            [
            	'title' => 'Nguyen Thi Van',           	
            	'content' => 'thivan@gmail.com',
            	
            ],
            [
            	'title' => 'Luong Ngoc Khanh',
            	'content' => 'admin@gmail.com',
            	
            ],
        ];
         DB::table('post')->insert($users);
    

    }
}
