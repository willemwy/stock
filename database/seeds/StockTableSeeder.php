<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class StockTableSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medicationIds = DB::table('medication')->lists("id");
        $clinicIds = DB::table('clinic')->lists("id");

        foreach($medicationIds as $medicationId)
        {
            foreach($clinicIds as $clinicId)
            {
                DB::table('stock')->insert(
                    [
                        'fk_clinic' => $clinicId,
                        'fk_medication' => $medicationId,
                        'level' => random_int(0,20)
                    ]
                );
            }
        }
    }
}
