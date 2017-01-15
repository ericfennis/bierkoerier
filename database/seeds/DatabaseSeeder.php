<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
	       'name' => 'eric',
	       'email' => 'eric.fennis@gmail.com',
	       'password' => bcrypt('hans'),
	       'remember_token' => str_random(10),
	     ]);

	     factory(App\Product::class, 5)->create();
    }
}
