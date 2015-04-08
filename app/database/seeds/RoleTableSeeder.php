<?php

class RoleTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('roles')->delete();

		Role::create(['name' => 'Programmer']);
		Role::create(['name' => 'Graphic Designer']);
	}

}
