<?php

namespace Avatrezaei\Filter;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Avatrezaei\Filter\EloquentBuilder;

class Filterable extends Model
{
     public static function query()
     {
          return (new static)->newQuery();
     }

    public function newEloquentBuilder($query)
    {
        return new EloquentBuilder($query);
    }

}