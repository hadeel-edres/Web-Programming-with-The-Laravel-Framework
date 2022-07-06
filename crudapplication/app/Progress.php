<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    protected $table = 'prosses';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'date', 'description'];
}
