<?php

use App\Attendance;
use App\ParentModel;
use App\Student;
use App\User;
use Illuminate\Database\Seeder;

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
        factory(ParentModel::class, 10)->create()->each(function ($person) {
            factory(Student::class, 3)->create(['parent_id' => $person->id])->each(function ($student) {
                factory(Attendance::class, 10)->create(['student_id' => $student->id]);
            });
        });

        //one record for admin purposes
        factory(User::class, 1)->create([
            'username' => 'admin',
            // 'email' => 'admin@ssms.com',
            'is_admin' => 1,
        ]);
    }
}
