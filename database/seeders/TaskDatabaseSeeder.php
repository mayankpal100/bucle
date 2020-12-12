<?php

namespace Database\Seeders;
use App\Models\Task;

use Illuminate\Database\Seeder;

class TaskDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Task::factory()->count(10)->create(); 


    }
}
