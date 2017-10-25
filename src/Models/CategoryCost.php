<?php
/**
 * Created by PhpStorm.
 * User: teteu
 * Date: 14/10/2017
 * Time: 10:02
 */

namespace SONFin\Models;


use Illuminate\Database\Eloquent\Model;

class CategoryCost extends Model
{
    //Mass Assignment
    protected $fillable = [
        'name',
        'user_id'
    ];
}
