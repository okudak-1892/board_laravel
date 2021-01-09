<?php

use Faker\Generator as Faker;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
    return [
        'body' => "コメントです。commentcomment。\n コメントコメント",
    ];
}
}