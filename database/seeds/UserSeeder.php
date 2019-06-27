<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'Luffy',
                'email' => 'lufffy@gmail.com',
                'password' => app('hash')->make('123456'),
            ],
            [
                'name' => 'Nami',
                'email' => 'nami@gmail.com',
                'password' => app('hash')->make('123456'),
            ],
            [
                'name' => 'Sanji',
                'email' => 'sanji@gmail.com',
                'password' => app('hash')->make('123456'),
            ],
        ]);
    }
}
