<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Curso\User;

class UserTableSeeder extends Seeder{
  public function run(){
  User::create(
  [
    'name' => 'Xena',
    'email' => 'Xena@WarriorPrincess',
    'username' => 'XenaWarriorPrincess',
    'password' => \Hash::make('secret')
  ]
);
User::create(
[
  'name' => 'Gaby',
  'email' => 'Gaby@WarriorPrincess',
  'username' => 'Gabrielle',
  'password' => \Hash::make('secret')
]
);
  }
}
