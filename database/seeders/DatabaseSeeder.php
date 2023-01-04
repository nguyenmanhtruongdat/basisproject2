<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('recruitments')->insert([
            'nameBusiness' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'name' => Str::random(10),
            'position'=> Str::random(10),
            'area'=> Str::random(10),
            'title'=> Str::random(10),
            'major'=> Str::random(10),
            'type'=> Str::random(10),
            'gender'=> Str::random(10),
            'rank'=> Str::random(10),
            'exp'=> Str::random(10),
            'currency'=> Str::random(10),
            'wage'=> Str::random(10),
            'detail'=> Str::random(200),
            'require'=> Str::random(200),
            'benefit'=> Str::random(200),
        ]);
    }
}
