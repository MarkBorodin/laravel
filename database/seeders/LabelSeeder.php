<?php


namespace Database\Seeders;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $labels = [['bug', 'red'], ['feature', 'green'], ['urgent', 'yellow']];
        foreach ($labels as $label)
        {
            DB::table('labels')->insert([
                'name' => $label[0],
                'color' => $label[1]
            ]);

        }
    }
}
