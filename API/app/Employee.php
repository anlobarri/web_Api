<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $filliable = array('id', 'name', 'email', 'contact_number', 'position');
}
