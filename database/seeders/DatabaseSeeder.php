<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\User;
use App\Models\Product;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // user seeder
        User::create([
            'name' => 'Ananda Ayu Sekar',
            'email' => 'namaku@mail.com',
            'password' => bcrypt('12345'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // category seeder
        $category = [
            ['name' => 'Elektronik',],
            ['name' => 'Makanan & Minuman',],
            ['name' => 'Tas',],
            ['name' => 'Pakaian',],
            ['name' => 'Sepatu',],
        ];

        DB::table('categories')->insert($category);
    }
}
