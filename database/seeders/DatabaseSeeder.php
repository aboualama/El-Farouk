<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class); 

        $this->call(GenderSeeder::class);   
        $this->call(HealthStatusSeeder::class);   
        $this->call(MilitaryTreatmentSeeder::class);   
        $this->call(SocialStatusSeeder::class);   
        \App\Models\Employee::factory(10)->create();
        $this->call(SettingTableSeeder::class);   
        $this->call(FunctionGroupTableSeeder::class);  
        $this->call(SubGroupTableSeeder::class);     
        $this->call(QualificationTableSeeder::class); 
        $this->call(FinancialDegreeTableSeeder::class);  
        $this->call(NominationTypeTableSeeder::class);    
        $this->call(CaderSeeder::class);   
        $this->call(JobStatusSeeder::class); 
        $this->call(JobStyleSeeder::class); 
        $this->call(TeacherDegreeSeeder::class);    
    }
}  
