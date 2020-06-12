<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectAchitecturesModel extends Model
{
    // //table name
    protected $table = 'project_architectures';

    //Primary key
    protected $primaryKey = 'id';


    //false time stamps
    public $timestamps = false;
}
