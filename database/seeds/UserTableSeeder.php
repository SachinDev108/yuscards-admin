<?php

use Carbon\Carbon as Carbon;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class UserTableSeeder.
 */
class UserTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();
        $this->truncate(config('access.users_table'));

        //Add the master administrator, user id of 1
        $countries = ["cameroon","nigeria","burkina faso","togo","togo","cameroon","nigeria"];
			
        for($i=0;$i< 7; ++$i){
			$users[$i] = [
                'first_name'        => 'User',
                'last_name'         => 'Test',
                'email'             => "user".$i."@yuscard.com",
				'name' 				=> "user".$i,
                'password'          => bcrypt('1234'),
                'confirmation_code' => md5(uniqid(mt_rand(), true)),
				'uuid'   			=> Uuid::generate(4),
				'refcode' 			=> Uuid::generate(4),
				'activation_token' 	=> str_random(60),
				'country'=>$countries[$i],
                'confirmed'         => true,
                'created_by'        => 1,
                'updated_by'        => null,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
                'deleted_at'        => null,
            ];
          
        }

        DB::table(config('access.users_table'))->insert($users);

        $this->enableForeignKeys();
    }
}
