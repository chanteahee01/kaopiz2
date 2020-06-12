<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
            	
                'content_comment' => 'thuha@gmail.com',
                'post_id' =>'1',
            	
            ],
            [
            	          	
                'content_comment' => 'thivan@gmail.com',
                'post_id'=>'2',
            	
            ],
            [
            	
                'content_comment' => 'admin@gmail.com',
                'post_id'=>'3',
            	
            ],
        ];
         DB::table('comment')->insert($users);
    }
}
