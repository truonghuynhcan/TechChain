<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::insert([
            [
                'user_id'=>5,
                'product_id'=>1,
                'content'=>'Cái này đem đập đá thì điện thoại vỡ.',
                'rating'=>5,
            ],
            [
                'user_id'=>6,
                'product_id'=>2,
                'content'=>'Cái này xịn nha. Xài hoài ko hết pin, nhớ cắm sạc rồi sài',
                'rating'=>4,
            ],
            [
                'user_id'=>5,
                'product_id'=>1,
                'content'=>'Cái này xịn nha. Xài hoài ko hết pin, nhớ cắm sạc rồi sài.',
                'rating'=>4,
            ],
            [
                'user_id'=>6,
                'product_id'=>2,
                'content'=>'Cái này đem đập đá thì điện thoại vỡ.',
                'rating'=>5,
            ],
        ]);
    }
}
