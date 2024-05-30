<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendeur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'ville',
        'tell',
        'email',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // public function client(){
    //     return $this->hasMany(Client::class,'client_id');
    // }
    
    
}
