<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminUserPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_user_permissions')->delete();
        
        \DB::table('admin_user_permissions')->insert(array (
            0 => 
            array (
                'user_id' => 2,
                'permission_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'user_id' => 2,
                'permission_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'user_id' => 2,
                'permission_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'user_id' => 2,
                'permission_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'user_id' => 3,
                'permission_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'user_id' => 3,
                'permission_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'user_id' => 3,
                'permission_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'user_id' => 3,
                'permission_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'user_id' => 3,
                'permission_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'user_id' => 3,
                'permission_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'user_id' => 3,
                'permission_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'user_id' => 3,
                'permission_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'user_id' => 3,
                'permission_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'user_id' => 3,
                'permission_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'user_id' => 2,
                'permission_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'user_id' => 2,
                'permission_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'user_id' => 2,
                'permission_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'user_id' => 2,
                'permission_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'user_id' => 2,
                'permission_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'user_id' => 2,
                'permission_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'user_id' => 3,
                'permission_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}