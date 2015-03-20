<?php
/**
 * Created by PhpStorm.
 * User: prism
 * Date: 3/20/15
 * Time: 2:29 PM
 */

class AllocationsTableSeeder extends Seeder{

    public function run() {
        $student_id = User::where('id', 11)->first();
        $student_2_id = User::where('id', 12)->first();
        $student_3_id = User::where('id', 13)->first();
        $supervisor_id = User::where('id', 6)->first();
        $second_marker_id = User::where('id', 4)->first();
        Allocation::create([
           'student_id' => $student_id,
            'supervisor_id' => $supervisor_id,
            'second_marker_id' => $second_marker_id
        ]);
        Allocation::create([
            'student_id' => $student_id,
            'supervisor_id' => $supervisor_id,
            'second_marker_id' => $second_marker_id
        ]);
        Allocation::create([
            'student_id' => $student_id,
            'supervisor_id' => $supervisor_id,
            'second_marker_id' => $second_marker_id
        ]);
    }
}