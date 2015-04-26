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
        DB::table('tasks')->delete();
        array('title' => 'Go to the store');
       // Task::create(array('title' => 'Go to the mall'));
       // Task::create(array('title' => 'Go to HELL'));
    }
}
