<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
        'name'=> 'Pablo',
        'email'=> 'pablo@varas',
        'password'=>'123456'
    ]) ;

    factory(User::class)->create();
    }
}
