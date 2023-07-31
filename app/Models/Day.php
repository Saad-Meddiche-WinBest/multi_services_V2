<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;


class Day extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $table = 'days';
    protected $guarded = ['id'];

}
