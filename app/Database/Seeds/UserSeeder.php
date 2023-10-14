<?php

namespace App\Database\Seeds;

use App\Models\User;
use CodeIgniter\Database\Seeder;
use Faker\Factory;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = new User();

        $model->insert([
            'username' => 'admin',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'name' => 'Administrator',
            'email' => 'mamayukero@mailfakeUHUY.com'
        ]);
    }
}
