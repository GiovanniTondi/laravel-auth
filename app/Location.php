<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;

class Location extends Model
{
    protected $fillable = [

        'name',
        'state',
        'city',
        'street_name',
        'street_address'
    ];

    public function employee() {

        return $this -> hasMany(Employee::class);
    }
}
