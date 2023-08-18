<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;

    protected $table = 'curricula';

    protected $primaryKey = 'id';

    public function subject()
    {
        return $this->hasOne(Subject::class);
    }

}
