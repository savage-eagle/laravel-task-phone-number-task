<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneNumbers extends Model
{
    use HasFactory;

    protected $table = 'phone_numbers';

    public $timestamps = true;

    protected $fillable = [
        'phone_book_id',
        'phone_number',
        'contact_type',
    ];

    public function phonebook()
    {
        return $this->hasOne(PhoneBook::class, "phone_book_id", "id");
    }
}
