<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Part;


class PartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('parts')->insert(['name' => 'Game of Thrones','views' => 1033158,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")]);
    DB::table('parts')->insert(['name' => 'Stranger Things','views' => 80810,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")]);
    DB::table('parts')->insert(['name' => 'Mr Robot','views' => 159349,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")]);
    DB::table('parts')->insert(['name' => 'Walking Dead','views' => 633349,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")]);
    DB::table('parts')->insert(['name' => 'Vikings','views' => 192689,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")]);

    }
}
