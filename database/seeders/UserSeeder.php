<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Sim Pondok Yatim';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('rahasia');
        $user->save();

        $user = new User();
        $user->name = 'adya';
        $user->email = 'adya@gmail.com';
        $user->password = Hash::make('rahasia');
        $user->save();

        $user = new User();
        $user->name = 'eka';
        $user->email = 'eka@gmail.com';
        $user->password = Hash::make('rahasia');
        $user->save();

        $user = new User();
        $user->name = 'amel';
        $user->email = 'amel@gmail.com';
        $user->password = Hash::make('rahasia');
        $user->save();

        $user = new User();
        $user->name = 'ali';
        $user->email = 'ali@gmail.com';
        $user->password = Hash::make('rahasia');
        $user->save();
    }
}
