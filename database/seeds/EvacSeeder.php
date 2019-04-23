<?php

use Illuminate\Database\Seeder;

class EvacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	DB::table('evacuation_centers')->insert([

        	'name_facility' => 'Bagumbayan Sports Complex',

        	'barangay_id'	=> 1,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'Calzada Covered Court',

        	'barangay_id'	=> 3,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'Cayetano Sports Complex',

        	'barangay_id'	=> 1,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'DMAC Covered Court',

        	'barangay_id'	=> 8,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'Eusebio S. Santos Elementary School',

        	'barangay_id'	=> 15,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'Hagonoy Gymnasium',

        	'barangay_id'	=> 4,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'Ibayo - Tipas Daycare Center 2',

        	'barangay_id'	=> 5,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'Napindan Integrated School',

        	'barangay_id'	=> 9,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'R.P Cruz Elementary School',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'Risen Lord Chapel',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'Cayetano Science & Technology High School',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'SEPVOAI Multi-purpose Hall',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'Taguig Integrated School',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'TCPC Multi - purpose Hall',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'Tipas Elementary School (Annex)',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'Tipas Elementary School (Main)',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'Ususan Elementary School',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'BLC Covered Court',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'Cardones Elementary School',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'Central Bicutan Covered Court',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'Daang Hari Elementart School',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'Diosdado Macapagal High School',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'Durant Covered Court',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'EMS Elementary School',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'GAT Andress Bonifacio Elementary School',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'Keris (Kapitan Eddie Reyes Integrated School)',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'Maharlika Trade Center',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'North Daang Hari Covered Court',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'P - 1 Covered Court',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'P - 11 Covered Court',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'P - 13 Covered Court',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'P - 7 Covered Court',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'Pag asa Covered Court',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'Palar Integrated School',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'Sto. Nino Chapel',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'Tanyag Covered Court',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);

        DB::table('evacuation_centers')->insert([

        	'name_facility' => 'Tenement Elementary School',

        	'barangay_id'	=> 7,

        	'created_at'  	=> date('Y-m-d H:i:s'),

        	'updated_at'  	=> date('Y-m-d H:i:s')

        ]);


    }
}
