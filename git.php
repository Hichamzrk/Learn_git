<?php 

namespace Monster;
/**
 * 
 */
class Monster
{
	const LIFE = 100;
	const COUP_DE_POING = 20;
	const COUP_DE_PIED = 35;

	public function coup_De_Pied($LIFE_ADVERSAIRE)
	{
	$LIFE_ADVERSAIRE = $LIFE_ADVERSAIRE - COUP_DE_PIED;
	}
}
