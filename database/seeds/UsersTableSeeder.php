<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id' => '1',
            'name' => 'atsu',
            'email' => 'aaa@bbb',
            'email_verified_at' => null,
            'password' => 'aaaa1234',
        ];
        DB::table('users')->insert($param);
    }
}
