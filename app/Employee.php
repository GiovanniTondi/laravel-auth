<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Location;
use App\Task;


class Employee extends Model
{
    protected $fillable = [

        'name',
        'lastname',
        'birtday',
        'personal_code',
        'location_id'
    ];

    public function location() {

        return $this -> belongsTo(Location::class);
    }


    public function task() {

        return $this -> belongsToMany(Task::class);
    }
}
