<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Str;
class daveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        DB::table('davecruds') -> insert([
            [
                'name'=>Str::random(20),
                'age'=>Str::random(20),
                'DOB'=>Str::random(20),
                'address'=>Str::random(20)
        ],
           [ 'name'=>'Obinna Nwoye',
            'age'=> "30",
            'DOB'=> "21/4/1989",
            'address'=> "2 Akugbe Avenue"],

            [ 'name'=>'Chibuzor Nwoye',
            'age'=> "32",
            'DOB'=> "21/4/1987",
            'address'=> "2 Upper Mission"],
            
            [ 'name'=>'Osato Nwoye',
            'age'=> "32",
            'DOB'=> "21/4/1985",
            'address'=> "2 Oliha Market Avenue"],
                   ]);
        //
    }
}
