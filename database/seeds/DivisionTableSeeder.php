<?php

use Illuminate\Database\Seeder;

class DivisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('nar_division')->insert([
            'division_name_eng' => 'Barisal',
            'division_name_bangla' => 'বরিশাল',
            'division_code' => 10,
            'country_code' => 880,
            'active_status' => 1,
            'delete_status' => 0
        ]);
    }
}
