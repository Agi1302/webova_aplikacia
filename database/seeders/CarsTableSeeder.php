<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarsTableSeeder extends Seeder
{
    public function run()
    {
        $cars = [
            [
                'name' => 'Audi',
                'is_registered' => true,
                'registration_number' => $this->generateRandomRegistrationNumber(),
                'image_path' => 'http://127.0.0.1:8000/storage/images/8qpSHp2fbFReO7CwyCFR89LIc5XY10VNOxL62qkF.avif',
            ],
            [
                'name' => 'BMW',
                'is_registered' => true,
                'registration_number' => $this->generateRandomRegistrationNumber(),
                'image_path' => 'http://127.0.0.1:8000/storage/images/8qpSHp2fbFReO7CwyCFR89LIc5XY10VNOxL62qkF.avif',
            ],
            [
                'name' => 'Mercedes',
                'is_registered' => true,
                'registration_number' => $this->generateRandomRegistrationNumber(),
                'image_path' => 'http://127.0.0.1:8000/storage/images/8qpSHp2fbFReO7CwyCFR89LIc5XY10VNOxL62qkF.avif',
            ],
            [
                'name' => 'Toyota',
                'is_registered' => true,
                'registration_number' => $this->generateRandomRegistrationNumber(),
                'image_path' => 'http://127.0.0.1:8000/storage/images/8qpSHp2fbFReO7CwyCFR89LIc5XY10VNOxL62qkF.avif',
            ],
            [
                'name' => 'Honda',
                'is_registered' => true,
                'registration_number' => $this->generateRandomRegistrationNumber(),
                'image_path' => 'http://127.0.0.1:8000/storage/images/8qpSHp2fbFReO7CwyCFR89LIc5XY10VNOxL62qkF.avif',
            ],
            [
                'name' => 'Ford',
                'is_registered' => true,
                'registration_number' => $this->generateRandomRegistrationNumber(),
                'image_path' => 'http://127.0.0.1:8000/storage/images/8qpSHp2fbFReO7CwyCFR89LIc5XY10VNOxL62qkF.avif',
            ],
            [
                'name' => 'Chevrolet',
                'is_registered' => true,
                'registration_number' => $this->generateRandomRegistrationNumber(),
                'image_path' => 'http://127.0.0.1:8000/storage/images/8qpSHp2fbFReO7CwyCFR89LIc5XY10VNOxL62qkF.avif',
            ],
            [
                'name' => 'Nissan',
                'is_registered' => true,
                'registration_number' => $this->generateRandomRegistrationNumber(),
                'image_path' => 'http://127.0.0.1:8000/storage/images/8qpSHp2fbFReO7CwyCFR89LIc5XY10VNOxL62qkF.avif',
            ],
            [
                'name' => 'Hyundai',
                'is_registered' => true,
                'registration_number' => $this->generateRandomRegistrationNumber(),
                'image_path' => 'http://127.0.0.1:8000/storage/images/8qpSHp2fbFReO7CwyCFR89LIc5XY10VNOxL62qkF.avif',
            ],
            [
                'name' => 'Kia',
                'is_registered' => true,
                'registration_number' => $this->generateRandomRegistrationNumber(),
                'image_path' => 'http://127.0.0.1:8000/storage/images/8qpSHp2fbFReO7CwyCFR89LIc5XY10VNOxL62qkF.avif',
            ],
            [
                'name' => 'Volvo',
                'is_registered' => true,
                'registration_number' => $this->generateRandomRegistrationNumber(),
                'image_path' => 'http://127.0.0.1:8000/storage/images/8qpSHp2fbFReO7CwyCFR89LIc5XY10VNOxL62qkF.avif',
            ],
            [
                'name' => 'Mazda',
                'is_registered' => true,
                'registration_number' => $this->generateRandomRegistrationNumber(),
                'image_path' => 'http://127.0.0.1:8000/storage/images/8qpSHp2fbFReO7CwyCFR89LIc5XY10VNOxL62qkF.avif',
            ],
            [
                'name' => 'Subaru',
                'is_registered' => true,
                'registration_number' => $this->generateRandomRegistrationNumber(),
                'image_path' => 'http://127.0.0.1:8000/storage/images/8qpSHp2fbFReO7CwyCFR89LIc5XY10VNOxL62qkF.avif',
            ],
            [
                'name' => 'Lexus',
                'is_registered' => true,
                'registration_number' => $this->generateRandomRegistrationNumber(),
                'image_path' => 'http://127.0.0.1:8000/storage/images/8qpSHp2fbFReO7CwyCFR89LIc5XY10VNOxL62qkF.avif',
            ],
            [
                'name' => 'Infiniti',
                'is_registered' => true,
                'registration_number' => $this->generateRandomRegistrationNumber(),
                'image_path' => 'http://127.0.0.1:8000/storage/images/8qpSHp2fbFReO7CwyCFR89LIc5XY10VNOxL62qkF.avif',
            ],
            [
                'name' => 'Tesla',
                'is_registered' => true,
                'registration_number' => $this->generateRandomRegistrationNumber(),
                'image_path' => 'http://127.0.0.1:8000/storage/images/8qpSHp2fbFReO7CwyCFR89LIc5XY10VNOxL62qkF.avif',
            ],
            [
                'name' => 'Porsche',
                'is_registered' => true,
                'registration_number' => $this->generateRandomRegistrationNumber(),
                'image_path' => 'http://127.0.0.1:8000/storage/images/8qpSHp2fbFReO7CwyCFR89LIc5XY10VNOxL62qkF.avif',
            ],
            [
                'name' => 'Ferrari',
                'is_registered' => true,
                'registration_number' => $this->generateRandomRegistrationNumber(),
                'image_path' => 'http://127.0.0.1:8000/storage/images/8qpSHp2fbFReO7CwyCFR89LIc5XY10VNOxL62qkF.avif',
            ],
            [
                'name' => 'Lamborghini',
                'is_registered' => true,
                'registration_number' => $this->generateRandomRegistrationNumber(),
                'image_path' => 'http://127.0.0.1:8000/storage/images/8qpSHp2fbFReO7CwyCFR89LIc5XY10VNOxL62qkF.avif',
            ],
            [
                'name' => 'Bugatti',
                'is_registered' => true,
                'registration_number' => $this->generateRandomRegistrationNumber(),
                'image_path' => 'http://127.0.0.1:8000/storage/images/8qpSHp2fbFReO7CwyCFR89LIc5XY10VNOxL62qkF.avif',
            ],
        ];

        foreach ($cars as $car) {
            Car::create($car);
        }
    }

    private function generateRandomRegistrationNumber()
    {
        return rand(10000000, 99999999);
    }
}

