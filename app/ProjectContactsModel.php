<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactsModel extends Model
{
     // //table name
     protected $table = 'contacts';

     //Primary key
     protected $primaryKey = 'id';
 
 
     //false time stamps
     public $timestamps = false;
}
