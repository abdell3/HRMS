<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    /** @use HasFactory<\Database\Factories\DepartementFactory> */
    use HasFactory;

    protected $fillable = ['name', 'manager_id', 'description', 'date_creation', 'entreprise_id'];

    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }

    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class, 'entreprise_id');
    }

    public function employes()
    {
        return $this->hasMany(User::class);
    }
}
