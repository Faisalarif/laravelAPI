<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectContractorsModel extends Model
{
     //table name
     protected $table = 'project_contractors';

     //Primary key
     protected $primaryKey = 'id';
 
 
     //false time stamps
     public $timestamps = false;
}
