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
	const FATALITY = 100;

	public function coup_De_Pied($LIFE_ADVERSAIRE)
	{
		$LIFE_ADVERSAIRE = $LIFE_ADVERSAIRE - COUP_DE_PIED;
	}

	public function fatality()
	{
		$LIFE_ADVERSAIRE = $LIFE_ADVERSAIRE - FATALITY;
	}
}