<?php

namespace Database\Seeders;

use App\Models\Personals;
use App\Models\Question;
use App\Models\Question_answer;
use App\Models\Question_type;
use App\Models\Survey;
use App\Models\Survey_type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\User_answer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Personals::factory(10)->create();
        Survey_type::factory(10)->create();
        Survey::factory(100)->create();
        Question_type::factory(10)->create();
        Question::factory(1000)->create();
        Question_answer::factory(200)->create();
        User_answer::factory(100)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
