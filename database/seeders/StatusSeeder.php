<?php


namespace Database\Seeders;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = ['to do', 'in progress', 'done'];
        foreach ($statuses as $status)
        {
            DB::table('statuses')->insert([
                'name' => $status
            ]);

        }
    }
}
