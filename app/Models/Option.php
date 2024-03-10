<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Option extends Model
{

    protected $fillable = ['name'];

    use HasFactory;

    public function poll() : BelongsTo {

    return $this->belongsTo(Poll::class);

    }
    public function vote() : HasMany {

     return $this->hasMany(Vote::class);

    }
}
