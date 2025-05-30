<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CouncilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $councils = [
            // ✅ Active Councils
            ['name' => 'PCAARRD', 'description' => 'R&D in agriculture, aquatic resources, and natural resources.', 'is_active' => true],
            ['name' => 'PCHRD', 'description' => 'Health and biomedical research council of the Philippines.', 'is_active' => true],
            ['name' => 'PCIEERD', 'description' => 'Council for industry, energy, and emerging technologies.', 'is_active' => true],
            ['name' => 'NRCP', 'description' => 'Supports basic research across scientific and humanities disciplines.', 'is_active' => true],
            ['name' => 'TAPI', 'description' => 'Promotes tech transfer, IP, and commercialization of DOST innovations.', 'is_active' => true],
            ['name' => 'MIRDC', 'description' => 'R&D center for the metals and engineering sector.', 'is_active' => true],
            ['name' => 'PTRI', 'description' => 'Textile research institute advancing local fiber and fabric tech.', 'is_active' => true],
            ['name' => 'ITDI', 'description' => 'Provides industrial R&D, pilot plant, and calibration/testing services.', 'is_active' => true],
            ['name' => 'ASTI', 'description' => 'ICT and space tech research agency of DOST.', 'is_active' => true],
            ['name' => 'FNRI', 'description' => 'National R&D arm for food, nutrition science, and public health.', 'is_active' => true],

            // ❌ Inactive Councils
            ['name' => 'PCARRD', 'description' => 'Philippine Council for Agriculture and Resources Research and Development (absorbed into PCAARRD)', 'is_active' => false],
            ['name' => 'NRCP Advisory Council', 'description' => 'Advisory group under NRCP, now inactive as a standalone body.', 'is_active' => false],
            ['name' => 'DOST-TAPI Advisory Board', 'description' => 'Oversight board for TAPI, no longer functional.', 'is_active' => false],
            ['name' => 'Philippine Textile Research Institute Council', 'description' => 'Textile research council, now under PTRI operations.', 'is_active' => false],
            ['name' => 'Technology Application Council', 'description' => 'Early initiative for commercialization, now merged with TAPI.', 'is_active' => false],
            ['name' => 'Committee on Space Technology and Applications', 'description' => 'Space-related advisory body before PhilSA.', 'is_active' => false],
            ['name' => 'Committee on Biosafety of GMOs', 'description' => 'Oversight of GMOs, duties now shared across agencies.', 'is_active' => false],
            ['name' => 'Industrial Technology Development Advisory Board', 'description' => 'Guided ITDI, now integrated under PCIEERD.', 'is_active' => false],
            ['name' => 'Metals Industry Development Council', 'description' => 'Previously guided MIRDC strategy, now defunct.', 'is_active' => false],
            ['name' => 'Renewable Energy Research Advisory Group', 'description' => 'R&D advisory group under PCIEERD, now inactive.', 'is_active' => false],
        ];

        foreach ($councils as $council) {
            DB::table('councils')->insert([
                'name' => $council['name'],
                'description' => $council['description'],
                'is_active' => $council['is_active'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
