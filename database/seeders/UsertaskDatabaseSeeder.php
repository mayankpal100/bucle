<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsertaskDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $key_company_id = DB::table('users')->pluck('id')->all();
        $product_id      = DB::table('tasks')->pluck('id')->all();
    
        //Seed product_key_companies table with 20 entries
        foreach ((range(1, 20)) as $index) 
        {
          DB::table('usertasks')->insert(
            [
              'task_id' => $product_id[array_rand($product_id)],
              'user_id' => $key_company_id[array_rand($key_company_id)]
            ]
          );
         }
    }
}
