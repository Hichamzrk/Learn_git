<?php

namespace Monster;

class Monster
{
    const LIFE = 100;
    const COUP_DE_POING = 20;
    const COUP_DE_PIED = 35;

   public function coupDePied($LIFE_ADVERSAIRE)
   {
     $LIFE_ADVERSAIRE = $LIFE_ADVERSAIRE - self::COUP_DE_PIED;
   }

   	public function coup_De_Poing($LIFE_ADVERSAIRE)
   {
   	 $LIFE_ADVERSAIRE = $LIFE_ADVERSAIRE - self::COUP_DE_POING;
   }
}
