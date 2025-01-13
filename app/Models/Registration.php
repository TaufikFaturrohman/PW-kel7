<?php

namespace App\Models;
use App\Http\Controllers\RegistrationController;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    {
        use HasFactory;
    
        protected $fillable = [
            'name',
            'email',
            'no_hp',
            'alamat',
            'tempat_lahir',
            'asal_sekolah',
        ];
    }
}
