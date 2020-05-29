<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentss extends Model
{
    public function scopeWhereLike($query, $column, $value)
{
    return $query->where($column, 'like', '%'.$value.'%');
}
}