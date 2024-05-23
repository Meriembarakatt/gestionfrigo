<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBonLivrason extends Model
{
    use HasFactory;
    protected $fillable = [
        'bon_livraison_id',
        'conditionnement_id',
        'produit_id',
        'qte',
        'prix_vente',
    ];

<<<<<<< HEAD
    public function bonLivrason()
    {
        return $this->belongsTo(BonLivrason::class);
    }
=======
>>>>>>> 17ebe221ad51071fe032247a04e3faccf8d88900
    /**
     * Obtenir le bon de livraison associé à ce détail.
     */
    public function bonLivraison()
    {
<<<<<<< HEAD
        return $this->belongsTo(BonLivrason::class);
=======
        return $this->belongsTo(BonLivraison::class);
>>>>>>> 17ebe221ad51071fe032247a04e3faccf8d88900
    }

    /**
     * Obtenir le conditionnement associé à ce détail.
     */
    public function conditionnement()
    {
        return $this->belongsTo(Conditionnement::class);
    }

    /**
     * Obtenir le produit associé à ce détail.
     */
    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
}
