<?php

use Illuminate\Database\Seeder;
use App\Person;
use App\Student;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Person::class, 10)->create()->each(function ($person) {
            factory(Student::class, 3)->create(['parent_id' => $person->id]);
        });
    }
}
