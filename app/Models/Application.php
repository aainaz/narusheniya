<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'author',
        'id',
        'status',
        'description',
        'auto_number',
    ];
    public function author_app()
    {
        return $this->belongsTo(User::class, 'author');
    }
    public function status_app()
    {
        return $this->belongsTo(Status::class, 'status');
    }
    public $timestamps = false;
}
