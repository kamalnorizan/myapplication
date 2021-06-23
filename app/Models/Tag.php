<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $table = 'tags';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $guarded = ['id'];


}
