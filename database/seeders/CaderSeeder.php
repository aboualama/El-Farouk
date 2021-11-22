<?php

namespace Database\Seeders;

use App\Models\Cader;
use Illuminate\Database\Seeder;

class CaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = ['عام', 'خاص'];  
        for($i = 0 ; $i < 2 ; $i++)
        { 
            Cader::create([
                'name' => $arr[$i], 
                'code' => $i + 1, 
            ]); 
        }  
    }
}
