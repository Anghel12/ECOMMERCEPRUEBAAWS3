<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Anghel Luis',
            'email' => 'angheluisg@gmail.com',
            'password' => bcrypt('Anghel2022'),
  /*           'referral_code' => Str::random(10),
      */      
        ])->syncRoles('Admin');
        
        User::factory(20)->create();
    }
}
