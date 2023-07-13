<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;
    protected $table = 'semesters';

    protected $fillable = [
        'name',
        'status',
        'created_by',
        'updated_by'
    ];

    public static $statusArrays = ['inactive', 'active'];

    public function created_by_user(){
        return $this->hasOne(User::class, 'id', 'created_by');
    }
    public function updated_by_user(){
        return $this->belongsTo(User::class, 'updated_by', 'id');
    }
}
