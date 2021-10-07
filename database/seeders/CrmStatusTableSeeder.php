<?php

namespace Database\Seeders;

use App\Models\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [
            [
                'id'         => 1,
                'name'       => 'Lead',
                'created_at' => '2021-10-07 20:01:25',
                'updated_at' => '2021-10-07 20:01:25',
            ],
            [
                'id'         => 2,
                'name'       => 'Customer',
                'created_at' => '2021-10-07 20:01:25',
                'updated_at' => '2021-10-07 20:01:25',
            ],
            [
                'id'         => 3,
                'name'       => 'Partner',
                'created_at' => '2021-10-07 20:01:25',
                'updated_at' => '2021-10-07 20:01:25',
            ],
        ];

        CrmStatus::insert($crmStatuses);
    }
}
