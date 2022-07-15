<?php

namespace Avatrezaei\Filter;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

interface FilterInterface
{
    function filter(Builder $builder);
    function getFilters();
    function resolveFilter(Builder $builder, $filter, $value);
}
