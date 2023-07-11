<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fee as f ;
class FeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Computer Fees
        $fee = new f(["description"=> "Computer Fee", "amount" => "800", "type" => "0"]); $fee->save();
       

        //Special Fees
        $fee = new f(["description"=> "Test Paper", "amount" => "300", "type" => "1"]); $fee->save();
        $fee = new f(["description"=> "*Clinical Forms", "amount" => "200", "type" => "1"]); $fee->save();
        $fee = new f(["description"=> "School Paper", "amount" => "70", "type" => "1"]); $fee->save();
        $fee = new f(["description"=> "Hepa Vaccine", "amount" => "600", "type" => "1"]); $fee->save();
        $fee = new f(["description"=> "Recollection / Retreat", "amount" => "3400", "type" => "1"]); $fee->save();
        $fee = new f(["description"=> "Red Cross Training", "amount" => "3000", "type" => "1"]); $fee->save();
        $fee = new f(["description"=> "Capping", "amount" => "3500", "type" => "1"]); $fee->save();
        $fee = new f(["description"=> "Bag and Shoe", "amount" => "2000", "type" => "1"]); $fee->save();
        $fee = new f(["description"=> "E-Learning", "amount" => "1000", "type" => "1"]); $fee->save();
        $fee = new f(["description"=> "Research Fee", "amount" => "1000", "type" => "1"]); $fee->save();
        $fee = new f(["description"=> "Graduation Fee", "amount" => "2500", "type" => "1"]); $fee->save();
        $fee = new f(["description"=> "Canossiana", "amount" => "1000", "type" => "1"]); $fee->save();
        $fee = new f(["description"=> "***Nursing Org. Fee", "amount" => "150", "type" => "1"]); $fee->save();
        $fee = new f(["description"=> "Name Plate", "amount" => "400", "type" => "1"]); $fee->save();
        $fee = new f(["description"=> "Hand Book", "amount" => "100", "type" => "1"]); $fee->save();
        $fee = new f(["description"=> "Insurance", "amount" => "150", "type" => "1"]); $fee->save();
        $fee = new f(["description"=> "Class Picture", "amount" => "75", "type" => "1"]); $fee->save();
        $fee = new f(["description"=> "I.D. with cord", "amount" => "200", "type" => "1"]); $fee->save();
        $fee = new f(["description"=> "*E-Learning", "amount" => "250", "type" => "1"]); $fee->save();
        $fee = new f(["description"=> "*Test Paper", "amount" => "150", "type" => "1"]); $fee->save();
        $fee = new f(["description"=> "Student Activities (COE and others)", "amount" => "100", "type" => "1"]); $fee->save();

        //Other School Fees
        $fee = new f(["description"=> "Registration", "amount" => "370", "type" => "2"]); $fee->save();
        $fee = new f(["description"=> "Library Fee", "amount" => "1000", "type" => "2"]); $fee->save();
        $fee = new f(["description"=> "Audio Visual", "amount" => "580", "type" => "2"]); $fee->save();
        $fee = new f(["description"=> "Athletic", "amount" => "600", "type" => "2"]); $fee->save();
        $fee = new f(["description"=> "Medical & Dental", "amount" => "477", "type" => "2"]); $fee->save();
        $fee = new f(["description"=> "Guidance", "amount" => "477", "type" => "2"]); $fee->save();
        $fee = new f(["description"=> "Development Fee", "amount" => "500", "type" => "2"]); $fee->save();
        $fee = new f(["description"=> "Laboratory", "amount" => "947", "type" => "2"]); $fee->save();
        $fee = new f(["description"=> "Energy Fee", "amount" => "1000", "type" => "2"]); $fee->save();
        $fee = new f(["description"=> "Computer Fee", "amount" => "1200", "type" => "2"]); $fee->save();
        $fee = new f(["description"=> "Nursing Skill Laboratory Fee", "amount" => "500", "type" => "2"]); $fee->save();
        $fee = new f(["description"=> "Hospital Affiliation Fee", "amount" => "1631", "type" => "2"]); $fee->save();
        $fee = new f(["description"=> "*Medical & Dental", "amount" => "300", "type" => "2"]); $fee->save();
        $fee = new f(["description"=> "*Energy Fee", "amount" => "375", "type" => "2"]); $fee->save();
        
    }
}
