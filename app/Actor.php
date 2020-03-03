<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use  Illuminate\Database\Eloquent\Builder;
class Actor extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('orden', function (Builder $builder) {
            $builder->orderBy('last_name');
        });
    }
   public $guarded= [];
    function nombreCompleto()
    {
        return $this->first_name." ".$this->last_name;
    }
}
