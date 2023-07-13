<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Shift extends Model
{
    use HasFactory;
    protected $table = 'shifts';

    protected $fillable = [
        'name',
        'status',
        'created_by',
        'updated_by'
    ];

    public static $statusArrays = ['inactive', 'active'];

    public function created_by_user():HasOne{
        return $this->hasOne(User::class, 'id', 'created_by');
    }
    public function updated_by_user():BelongsTo{
        return $this->belongsTo(User::class,'updated_by', 'id');
    }
}
