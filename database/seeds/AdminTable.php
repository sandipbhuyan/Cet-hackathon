<?php

use Illuminate\Database\Seeder;

class AdminTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            "name" => "Sandip Bhuyan",
            "email" => "sandipbhuyan@gmail.com",
            "password" => Hash::make("sb28f97"),
            "admin" => 1,
        ]);
        DB::table('users')->insert([
            "name" => "Sandip Bhuyan",
            "email" => "sandipbhuyan1@gmail.com",
            "password" => Hash::make("sb28f97"),
            "admin" => 1,
        ]);
    }
}
