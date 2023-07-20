<?php

namespace Database\Factories;

use App\Models\Record;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Record>
 */
class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    private function customJob()
    {
        $jobs = ["School","Counselor" ,"Police", "Officer", "Judge", "Architect" ,"Dental" ,"Hygienist" ,"Computer", "Hardware", "Engineer","Economist","Fitness" ,"Trainer", "Security" ,"Guard", "Marketing", "Manager" ,"Mechanical Engineer", "Veterinarian", "High School Teacher" ,"Electrician" ,"Farmer" ,"Chemist",  "publisher" ,"Substance" , "Educator", "Sports Coach"];
        return $jobs[array_rand($jobs)];
    }

    private function customAge(){
        $ages = random_int(15,60);
        return $ages;
    }
    protected $model = Record::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'address' => $this->faker->address,
            'job' => $this->customJob(),
            'age' => $this->customAge()

        ];
    }
}
