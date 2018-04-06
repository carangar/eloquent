<?php

use Illuminate\Database\Seeder;
use ORM\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(USer::class, 100)->create();
    }
}
