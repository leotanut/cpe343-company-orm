<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'department';

    protected $primaryKey = 'dnumber';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function manager()
    {
        // TODO: add relation over here.
    }

    public function employees()
    {
        // TODO: add relation over here.
    }

    public function projects()
    {
        // TODO: add relation over here.
    }

    public function locations()
    {
        // TODO: add relation over here.
    }
}