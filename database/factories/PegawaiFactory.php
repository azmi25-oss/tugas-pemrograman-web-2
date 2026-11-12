<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PegawaiFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nip' => fake()->unique()->numerify('################'),
            
            'name' => fake()->name(),

            'jabatan' => fake()->randomElement([
                'Pranata Komputer',
                'Analis Kepegawaian',
                'Analis Kebijakan',
                'Auditor',
                'Arsiparis',
                'Pengelola Pengadaan Barang/Jasa',
                'Pengadministrasi Perkantoran',
                'Perencana',
                'Penyuluh Pertanian',
                'Guru',
                'Dokter',
                'Perawat',
            ]),

            'golongan' => fake()->randomElement([
                'II/a',
                'II/b',
                'II/c',
                'II/d',
                'III/a',
                'III/b',
                'III/c',
                'III/d',
                'IV/a',
                'IV/b',
            ]),

            'unit' => fake()->randomElement([
                'Badan Kepegawaian dan Pengembangan Sumber Daya Manusia',
                'Dinas Pendidikan',
                'Dinas Kesehatan',
                'Dinas Komunikasi dan Informatika',
                'Dinas Kependudukan dan Pencatatan Sipil',
                'Badan Perencanaan Pembangunan Daerah',
                'Inspektorat Daerah',
                'Dinas Pertanian',
                'Dinas Sosial',
                'Sekretariat Daerah',
                'Badan Pengelolaan Keuangan dan Aset Daerah',
                'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu',
            ]),
        ];
    }
}
