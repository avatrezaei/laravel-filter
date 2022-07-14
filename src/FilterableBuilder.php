<?php

namespace Avatrezaei\Filter;

use Avatrezaei\Filter\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

trait FilterableBuilder
{
    public function scopeFilter(Builder $builder,Request $request)
    {
        return (new Filter($request))->filter($builder);
    }
}