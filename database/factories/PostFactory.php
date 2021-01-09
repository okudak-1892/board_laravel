<?php

use Faker\Generator as Faker;

class PostsFactory extends Factory
{
    protected $model = Posts::class;

    public function definition()
    {
    return [
        'title' => '投稿のタイトル',
        'body' => "本文です。aaaaaaaaa。\n bbbbbbbbbbbb",
      ];
}
}




