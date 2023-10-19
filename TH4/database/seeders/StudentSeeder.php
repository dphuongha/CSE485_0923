<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        //Chay vong lap de xac dinh so ban ghi muon sinh va kieu du lieu muon sinh tu Faker
        for($i = 0; $i <10; $i++) {
            //goi ra Post + lenh Create de truyen vao mang duoi dang key value
            //key: ten cot, value: gia tri lay ra tu Faker
            Student::create([
                'name' => $faker->sentence(2,true), //muon title sinh ra 1 cau van ban sinh ra 6 tu
                
            ]);

        }
    }
}
