<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use function Laravel\Prompts\password;

class emp extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table ='db2';
    protected $fillable =
    [
        'name',
        'email',
        'password',

    ];
}
