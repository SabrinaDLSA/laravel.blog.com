<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Curso\Feedback;

class FeedbackTableSeeder extends Seeder{
  public function run(){
  Feedback::create(
  [
    'user' => 'Gaby',
    'content' => 'Great post by the way!'
  ]
);
}
}
