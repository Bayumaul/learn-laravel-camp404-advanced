<?php

namespace Database\Seeders;

use App\Models\Customer;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use PharIo\Manifest\Email;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dummy = Factory::create('id_ID');
        $data = [];

        for ($i = 0; $i < 50; $i++) {
            $gender = $dummy->randomElement(['male', 'female']);
            $data[] = [
                'email' => $dummy->email(),
                'first_name' => $dummy->firstName($gender),
                'last_name' => $dummy->lastName(),
                'city' => $dummy->city(),
                'address' => $dummy->address(),
                'password' => Hash::make('12345678'),
            ];
        }

        (new Customer())->insert($data);
    }
}
