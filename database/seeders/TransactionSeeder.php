<?php

// database/seeders/TransactionSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;
use App\Models\User;
use Faker\Factory as Faker;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        // Clear existing records to start fresh
        Transaction::truncate();

        $faker = Faker::create();

        // Assuming there's a 'users' table with data
        $userIds = User::pluck('id')->toArray();

        foreach (range(1, 20) as $index) {
            Transaction::create([
                'amount' => $faker->randomFloat(2, 10, 1000),
                'date' => $faker->dateTimeThisMonth(),
                'user_id' => $faker->randomElement($userIds),
            ]);
        }
    }
}
