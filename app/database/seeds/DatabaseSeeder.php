<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('TasksTableSeeder');
	}
}

class TasksTableSeeder extends Seeder {
    public function run(){
        DB::table('tasks')->insert(array(
        array('title' => 'Go to the store'),
        array('title' => 'Go to the mall'),
        array('title' => 'Go to HELL')));
    }
}
