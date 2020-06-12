<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectDesignersModel extends Model
{
     //table name
     protected $table = 'project_designers';

     //Primary key
     protected $primaryKey = 'id';
 
 
     //false time stamps
     public $timestamps = false;
}
