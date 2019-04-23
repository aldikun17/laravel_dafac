<?php

use Illuminate\Database\Seeder;

class DisasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	DB::table('disasters')->insert([

        	'disaster_type' => 'fire',

        	'created_at'  => date('Y-m-d H:i:s'),

        	'updated_at'  => date('Y-m-d H:i:s')

        ]);

        DB::table('disasters')->insert([

        	'disaster_type' => 'flood',

        	'created_at'  => date('Y-m-d H:i:s'),

        	'updated_at'  => date('Y-m-d H:i:s')

        ]);

    }
}
