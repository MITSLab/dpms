<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = collect([
            'admin',
            'kasir',
            'cs',
            'produksi'
        ]);

        $roles->map(function ($nama) {
            Role::query()
                 ->updateOrCreate(compact('nama'), compact('nama'));
        });
    }
}
