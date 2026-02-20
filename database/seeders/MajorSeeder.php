<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('majors')->insert([
            'name_major' => 'Rekayasa Perangkat Lunak',
            'name_major' => 'Teknik Komputer dan Jaringan',
            'name_major' => 'Seni Karawitan',
            'name_major' => 'Teknik Elektronika Industri',
        ]);
    }
}
