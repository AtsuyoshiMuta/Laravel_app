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
            'poster_id' => 0,
            'title' => 'sample1',
            'maintext' => 'これはsampleテキスト１です。これはsampleテキスト１です。これはsampleテキスト１です。これはsampleテキスト１です。これはsampleテキスト１です。これはsampleテキスト１です。',
            'hmm' => 0,
            'agree' => 0,
        ];
        DB::table('maintext')->insert($param);

        $param = [
            'poster_id' => 0,
            'created_at' => new DateTime('1994-05-18 00:00:00'),
            'title' => 'sample2',
            'maintext' => 'これはsampleテキスト２です。これはsampleテキスト２です。これはsampleテキスト２です。これはsampleテキスト２です。これはsampleテキスト２です。これはsampleテキスト２です。',
            'hmm' => 0,
            'agree' => 0,
        ];
        DB::table('maintext')->insert($param);

        $param = [
            'poster_id' => 0,
            'title' => 'sample3',
            'maintext' => 'これはsampleテキスト３です。これはsampleテキスト３です。これはsampleテキスト３です。これはsampleテキスト３です。これはsampleテキスト３です。これはsampleテキスト３です。',
            'hmm' => 0,
            'agree' => 0,
        ];
        DB::table('maintext')->insert($param);
    }
}
