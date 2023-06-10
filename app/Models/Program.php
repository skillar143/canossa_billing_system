<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Program extends Model
{
    use HasFactory;
    protected $table = 'programs';

    protected $primaryKey = 'id';



    public function subject()
    {
        return $this->hasOne(Subject::class,'subject_id' );
    }
}

