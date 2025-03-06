<?php

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->truncate();

        // 投入するテストデータ情報
        $testData = [
            [
                'content' => 'PHP Appセクションを終える',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content' => 'Laravel Lessonを終える',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        // テストデータをテーブルに投入する
        DB::table('todos')->insert($testData);
    }
}
