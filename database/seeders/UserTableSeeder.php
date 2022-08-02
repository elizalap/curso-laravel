<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Factory;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Factory(User::class, 10)->create();
        /*
        User::create([
            'name' => 'Carlos Ferreira',
            'email' => 'carlos@especializati.com.br',
            'password' => bcrypt('123456'),]);
        */
    }
}
