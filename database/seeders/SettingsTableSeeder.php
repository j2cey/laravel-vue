<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'key' => 'app_name',
                'value' => 'Test App',
            ],
            [
                'key' => 'date_format',
                'value' => 'd/m/Y',
            ],
            [
                'key' => 'pagination_limit',
                'value' => 10,
            ],
        ]);
    }
}
