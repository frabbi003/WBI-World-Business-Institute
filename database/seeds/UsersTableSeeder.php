<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userInfo = [
            "name" => "Super Admin",
            "email" => "admin@example.com",
            "password" => bcrypt('123456'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ];
        DB::table('users')->insert($userInfo);
    }
}
