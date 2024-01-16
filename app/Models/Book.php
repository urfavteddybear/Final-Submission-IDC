<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $fillable = ['book_name', 'description', 'category_id'];

    protected $attributes = [
        'is_deleted' => false,
    ];

    protected $hidden = [
        'is_deleted'
    ];

    public function category()
    {
        return $this->belongsTo(bookCategory::class, 'category_id');
    }
}
