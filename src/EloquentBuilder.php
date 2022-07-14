<?php
namespace Avatrezaei\Filter;

use Illuminate\Database\Eloquent\Builder;
use Avatrezaei\Filter\FilterableBuilder;

class EloquentBuilder extends Builder {
    use FilterableBuilder;
}