<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes, Uuid;

    protected $fillable = [
        'name',
        'description',
        'is_active'
    ];
    protected $date = ['deleted_at'];
    protected $casts = [ 'id' => 'string'];

    public $incrementing = false;

}
