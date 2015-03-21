<?php
/**
 * Created by PhpStorm.
 * User: prism
 * Date: 3/16/15
 * Time: 11:32 AM
 */

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // seeder for authorised member
        User::create([
            'role' => "auth_member",
            'name' => "Mr.Django",
            'email' => "fake@email.com",
            'password' => Hash::make('1234')
        ]);
        User::create([
            'role' => "auth_member",
            'name' => "Mr.Prism",
            'email' => "git.pyprism@gmail.com",
            'password' => Hash::make('1234')
        ]);

        // seeder for 3 second markers
        foreach(range(1, 3) as $index) {
            User::create([
                'role' => 'second_marker',
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('1234')
            ]);
        }

        // seeder for 4  supervisors
        foreach(range(1, 4) as $index) {
            User::create([
                'role' => 'supervisor',
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('1234')
            ]);
        }

        // seeder for 30 students
        foreach(range(1, 30) as $index) {
            User::create([
                'role' => 'student',
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('1234')
            ]);
        }
    }

}