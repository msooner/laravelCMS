<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategroiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            '压岁钱',
            '零花钱',
            '奖励',
            '其他',
            '吃的',
            '穿的',
            '玩的',
            '用的',
            '学习的',
            '其他',

        ];
        foreach ($data as $value) {

            DB::table('categories')->insert([
                'cate_name' => $value,
            ]);
        }
    }
}
