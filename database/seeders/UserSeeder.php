<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('a'),
                'level' => 1
            ],
            [
                'name' => 'Petugas',
                'email' => 'petugas@gmail.com',
                'password' => bcrypt('b'),
                'level' => 2
            ],
            [
                'name' => 'Masyarakat',
                'email' => 'masyarakat@gmail.com',
                'password' => bcrypt('c'),
                'level' => 3
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
?>