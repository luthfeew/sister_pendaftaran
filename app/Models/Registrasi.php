<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'idNumber',
        'fullname',
        'gender',
        'citizenshipType',
        'citizenship',
        'IDType',
        'address',
        'lastEduBg',
        'religion',
        'maritalStatus',
        'motherMaidenName',
        'pob',
        'dob',
        'hobby',
        'noTelp',
        'email',
        'schedule',
    ];
}
