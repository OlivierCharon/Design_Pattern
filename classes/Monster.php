<?php

class Monster implements CombatZone
{
    protected $name;
    public $health;
    public $damage;

	public function getName(): ?string {
		return $this->name;
	}

	public function setName( $name) {
		$this->name = $name;
	}

	public function getHealth(): ?int {
		return $this->health;
	}

	public function setHealth( $health) {
		$this->health = $health;
	}

    public function getDamage(): ?int {
		return $this->damage;
	}

	public function setDamage( $damage) {
		$this->damage = $damage;
    }
    
    public function __construct(string $name, int $health, int $damage)
    {
        $this->setName($name);
        $this->setDamage($damage);
        $this->setHealth($health);
    }

    public static function dead($idMonster)
    {
        $requeteDelete = $link->prepare("DELETE FROM Monster WHERE idMonster = $idMonster ");
        
        SPDO::getInstance()->query("DELETE FROM Monster WHERE idMonster = $idMonster ");        
    
        
    }

    public function combat( $combattant)
    {
            $this->setDamage($this->getDamage());
            $combattant->health -= $this->getDamage();

    }
}