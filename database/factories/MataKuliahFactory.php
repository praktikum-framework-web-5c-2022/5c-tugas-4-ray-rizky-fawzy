<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MataKuliah>
 */
class MataKuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Faker::create('id_ID');
        return [
            'kode_mk' =>  $faker->numerify('IF###'),
            'nama_mk' =>  $faker->randomElement([
                'algoritma pemrograman',
                'struktur data',
                'basis data',
                'pemrograman berorientasi objek',
                'jaringan komputer',
                'pemrograman berbasis web',
                'sistem operasi',
                'pemrograman berbasis mobile',
                'data mining',
                'framework pemrograman web',
                'machine learning',
                'pengolahan citra digital',
                'pengenalan algoritma pemrograman',
                'pengenalan basis data',
                'algoritma struktur data',
                'statistika probabilitas',
                'fisika dasar',
                'sistem informasi akuntansi dan keuangan',
                'jaringan keamanan sistem',
                'pemrograman perangkat bergerak',
                'komputasi awan',
                'pemrograman animasi multimedia'
            ]),
            'sks' => $faker->numberBetween(1,3),
            'nama_dosen' => $faker->name()

        ];
    }
}
