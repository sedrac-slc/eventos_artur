<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enum\UserTypeEnum;

use App\Models\{
    User
};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void{
        // \App\Models\User::factory(10)->create();
        $userOne = User::create([
            'name' => "Sabino Hossi", 'email' => "sabinohossi@gmail.com",  'password' => bcrypt('12345678'),
            'birthday' => '1999-02-20', 'phone' => '923789343',  'gender' => 'MALE',
            'type' =>  UserTypeEnum::ADIMN
        ]);

        $userTwo = User::create([
            'name' => "Bela Gomes", 'email' => "belagomes@gmail.com", 'password' => bcrypt('12345678'),
            'birthday' => '1999-06-21', 'phone' => '913769344', 'gender' => 'FEMALE',
            'type' => UserTypeEnum::USER
        ]);

    }

}
