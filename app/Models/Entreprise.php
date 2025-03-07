<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    /** @use HasFactory<\Database\Factories\EntrepriseFactory> */
    use HasFactory;


    protected $fillable = [
        'name', 
        'sect_activ',
        'adresse',
        'logo',
        'emailPro',
        'phone',
        'date_inscription'
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }


}
