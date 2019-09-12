<?php

namespace App;

use App\Scopes\ScopePerson;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Person extends Model
{
    protected static function boot(){
        // グローバルスコープ
        // すべてのクエリにこのスコープが自動適用
        parent::boot();
        static::addGlobalScope(new ScopePerson);
    }

    public function getData(){
        return $this->id . ': ' . $this->name . '(' . $this->age . ')';
    }

    public function scopeNameEqual($query, $str){
        //scopeHogeFugaという命名だが呼び出すときはhogeFugaになる
        return $query->where('name', $str);
    }

    public function scopeAgeGreaterThan($query, $n){
        return $query->where('age', '>=', $n);
    }

    public function scopeAgeLessThan($query, $n){
        return $query->where('age', '<=', $n);
    }
}
