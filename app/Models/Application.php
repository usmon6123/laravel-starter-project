<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'subject', 'message', 'file_url'];

    protected $casts = [
        'user_id' => 'integer',
        'subject' => 'string',
        'message' => 'string',
        'file_url' => 'string'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
