<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User as User;

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
        $utilisateur = new User;
        $utilisateur->email ='super@super.com';
        $utilisateur->password = 'super';
        $utilisateur->name = 'super';

        $utilisateur = new User;
        $utilisateur->email ='super2@super2.com';
        $utilisateur->password = 'super2';
        $utilisateur->name = 'super2';
        $utilisateur->save();
    }
}
