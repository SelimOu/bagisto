<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Webkul\Installer\Database\Seeders\DatabaseSeeder as BagistoDatabaseSeeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $password = password_hash('admin1234', PASSWORD_BCRYPT, ['cost' => 10]);

        
            DB::table('admins')->updateOrInsert(
                ['id' => 1],
                [
                    'name'     => 'admin',
                    'email'    => 'admin@example.com',
                    'password' => $password,
                    'role_id'  => 1,
                    'status'   => 1,
                ]);
            



    }
}
