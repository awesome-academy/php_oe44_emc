<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake  = Faker\Factory::create();
        $limit = 10;

        for ($i = 0; $i < $limit; $i++){
            DB::table('order_product')->insert([
                'quantity' => $fake->numberBetween(1,5),
                'product_id' => $fake->numberBetween(1,10),
                'order_id' => $fake->numberBetween(1,10),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ]);
        }
    }
}
