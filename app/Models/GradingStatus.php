<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradingStatus extends Model
{
    use HasFactory;
    protected $table = 'grading_statuses';

    protected $primaryKey = 'id';
}
