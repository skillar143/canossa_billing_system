<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Discount as d;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $discount = new d(["description"=> "St Magdalene of Canossa", "amount" => "70"]); $discount->save();
        $discount = new d(["description"=> "St Josephine Bakhita", "amount" => "100"]); $discount->save(); 
    }
}
