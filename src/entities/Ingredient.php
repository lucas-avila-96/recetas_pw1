<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ingredient")
 */
class Ingredient
{
	/**
	 * @ORM\Id
     * @ORM\GeneratedValue
	 * @ORM\Column(type="integer")
	 * @var int
	 */
	private $id;

	/**
	 * @ORM\Column(type="string")
	 * @var string
	 */
	private $nombre;

    /**
	 * @ORM\Column(type="integer")
	 * @var int
	 */
	private $cantidad;

    /**
	 * @ORM\Column(type="string")
	 * @var string
	 */
	private $unidad;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Recipe")
     * @var Recipe
     */
    private $recipe;

	public function __construct($nombre, $cantidad, $unidad) {
		$this->nombre = $nombre;
		$this->cantidad = $cantidad;
		$this->unidad = $unidad;
	}

	public function getName(){
		return $this->nombre;
	}

	public function getCantidad(){
		return $this->cantidad;
	}

	public function getUnidad(){
		return $this->unidad;
	}

	public function getRecipe(){
		return $this->recipe;
	}

	public function setName($nombre){
		$this->nombre = $nombre;
	}

	public function setCantidad($cantidad){
		$this->cantidad = $cantidad;
	}

	public function setUnidad($unidad){
		$this->unidad = $unidad;
	}

	public function setRecipe($recipe){
		$this->recipe = $recipe;
	}


}
