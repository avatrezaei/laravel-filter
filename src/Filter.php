<?php
namespace Avatrezaei\Filter;

use Avatrezaei\Filter\FilterInterface;

abstract class Filter implements FilterInterface {
     protected $request;

     protected $filters = [];
 
     public function __construct(Request $request)
     {
         $this->request = $request;
     }
 
 
     public function filter(Builder $builder)
     {
         foreach ($this->getFilters() as $filter => $value) {
             $this->resolveFilter($builder, $filter, $value);
         }
         return $builder;
     }
 
     public function getFilters()
     {
         return array_filter($this->request->only(array_keys($this->filters)));
     }
 
     public function resolveFilter(Builder $builder, $filter, $value)
     {
         return $this->filters[$filter]($builder, $value);
     }
}