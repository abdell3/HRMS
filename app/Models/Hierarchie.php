<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hierarchie extends Model
{
    /** @use HasFactory<\Database\Factories\HierarchieFactory> */
    use HasFactory;


    protected $fillable = [
        'employe_id',
        'manager_id',
        'position_hierarchie',
        'date_ajout'
    ];

    public function employe()
    {
        return $this->belongsTo(User::class, 'employe_id');
    }


    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }



}
