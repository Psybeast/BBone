<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Contact
 *
 * @author fleischerb
 */
class Contact extends Eloquent{
    public $table = 'contacts';
    protected $fillable = array('first_name', 'last_name', 'email_address', 'description');
    public $timestamps = false;
}
