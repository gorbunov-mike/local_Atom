<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        // \App\Models\User::factory(10)->create();

        $statuses = [
            ['name' => 'Согласовано руководителем'],
            ['name' => 'Заявка отклонена'],
        ];

        foreach ($statuses as $status) {
            DB::table('statuses')->insert($status);
        }

        $tasks = [
            ['title' => 'AA1', 'name' => '1С Бухгалтерия'],
            ['title' => 'BB1', 'name' => 'Личный кабинет'],
        ];

        foreach ($tasks as $task) {
            DB::table('tasks')->insert($task);
        }

    }
}
