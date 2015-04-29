<?php
class ContactsTableSeeder extends Seeder {
    public function run(){
        DB::table('contacts')->insert(array(
            array(
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email_address' => 'john@whatnot.com',
                'description' => 'Noone you should care about'
            ),
            array(
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'email_address' => 'jane@whatnot.com',
                'description' => 'John\'s wife, but who cares?!'
            ),
            array(
                'first_name' => 'Butcher',
                'last_name' => 'the Doctor',
                'email_address' => 'psydoc@whatnot.com',
                'description' => 'Come visit me for a diagnosis ... I dare you!'
            )
        ));          
    }
}

