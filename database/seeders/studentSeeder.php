<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // add user data
         DB::table('students')->insert([
            "name"=>"ridho",
            "gender"=>"Male",
            "nim"=>"06183070",
            "role_id"=>"3",
            "email"=>"ridho@gmail.com",
            "password"=>"12345"
         ]);
    }
}
