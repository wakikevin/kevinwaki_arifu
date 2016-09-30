<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
	//define the table
	protected $table = 'tbl_subjects';

    //define the fields that can be manipulated by the application layer
    protected $fillable = ['name','description'];
}
