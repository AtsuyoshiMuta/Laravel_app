<?php

use Illuminate\Database\Seeder;

class MaintextTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
          'maintext' => 'これはsampleテキスト１です。これはsampleテキスト１です。これはsampleテキスト１です。これはsampleテキスト１です。これはsampleテキスト１です。これはsampleテキスト１です。'
        ];
        DB::table('maintext')->insert($param);

        $param = [
            'maintext' => 'これはsampleテキスト２です。これはsampleテキスト２です。これはsampleテキスト２です。これはsampleテキスト２です。これはsampleテキスト２です。これはsampleテキスト２です。'
        ];
        DB::table('maintext')->insert($param);

        $param = [
            'maintext' => 'これはsampleテキスト３です。これはsampleテキスト３です。これはsampleテキスト３です。これはsampleテキスト３です。これはsampleテキスト３です。これはsampleテキスト３です。'
        ];
        DB::table('maintext')->insert($param);
    }
}
