<?php

/**
 * Class correspondant à un compte bancaire
 */
class Compte
{

    /**
     * Titulaire du compte
     *
     * @var string
     */
    public $titulaire;

    /**
     * Solde du compte
     *
     * @var float
     */
    public $solde;

    public function __construct($titulaire, $solde = 500)
    {
        // On affecte le titulaire à la propriété titulaire
        $this->titulaire = $titulaire;

        // On affecte le solde à la propriété solde
        $this->solde = $solde;
    }

    /**
     * Voir le solde du compte
     * @return void 
     */
    public function voirSolde()
    {
        echo "Le solde du compte est de $this->solde euros";
    }

    /**
     * Déposer de l'argent sur le compte
     *
     * @param float $montant Montant déposé
     * @return void
     */
    public function deposer(float $montant)
    {
        // On vérifie si le montant est positif
        if ($montant > 0) {
            $this->solde += $montant;
        }
    }

    /**
     * Retire un montant du solde du compte
     *
     * @param float $montant Montant à retirer
     * @return void
     */
    public function retirer(float $montant)
    {
        // On vérifie le montant et le solde
        if ($montant > 0 && $this->solde >= $montant) {
            $this->solde -= $montant;
        } else {
            echo "Montant invalide ou solde insuffisant";
        }
    }
}
