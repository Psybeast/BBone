<?php
/**
 * Created by PhpStorm.
 * User: Balazs
 * Date: 4/26/2015
 * Time: 19:17
 */

class Task extends Eloquent{
    protected $table = 'tasks';
    protected $fillable = array('title', 'completed');
    public $timestamps = false;
}