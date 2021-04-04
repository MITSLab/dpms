<?php

namespace Database\Seeders;

use App\Models\User;
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
        $users = collect([
            [
                'nama' => 'Administrator',
                'username' => 'admin',
                'email' => 'admin',
                'password' => bcrypt('000000'),
                'role_id' => 1,
                'kategori_user_id' => 1,
                'is_active' => 1,
            ],
            [
                'nama' => 'Kasir',
                'username' => 'kasir',
                'email' => 'kasir',
                'password' => bcrypt('000000'),
                'role_id' => 2,
                'kategori_user_id' => 2,
                'is_active' => 1,
            ]
        ]);

        $users->map(function ($user) {
            User::query()->updateOrCreate(
                ['username' => $user['username']],
                (array) $user
            );
        });
    }
}
