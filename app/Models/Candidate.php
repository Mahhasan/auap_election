<?php

namespace App\Models;
use App\Models\Vote;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'number',
        'cv',
        'video',
        'country',
    ];
    public function votes()
    {
        return $this->hasMany(Vote::class, 'candidate_id');
    }
}
