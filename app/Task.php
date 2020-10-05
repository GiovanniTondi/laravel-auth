<?php

namespace App;

use App\Employee;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [

        'name',
        'description',
        'start_date',
        'end_date'
    ];

    public function employee() {

        return $this -> belongsToMany(Employee::class);
    }
}
