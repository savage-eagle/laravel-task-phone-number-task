<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneBook extends Model
{
    use HasFactory;

    protected $table = 'phone_book';

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'is_blocked',
    ];

    public function phone_numbers()
    {
        return $this->hasMany(PhoneNumbers::class, "phone_book_id", "id");
    }
}
