<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collection\ArrayCollection;


/**
 * @ORM\Entity
 * @ORM\Table(name="recipe")
 */
class Recipe
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
    private $name;

    /**
     * @ORM\Column(type="datetime")
     * @var string
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $time;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $elaboration;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @var User
     * 
     */
    private $user;

    /**
	 * @ORM\OneToMany(targetEntity="Ingredient", mappedBy="ingredient", cascade={"all"})
     * @var Ingredient[]
     */
    private $ingredients;

    public function __construct(
		$data = [
			"name"		=> '',
			"date"		=> '',
			"time"	    => '',
            "elaboration" => ''
		]
	) {
		$this->name = $data['name'];
		$this->time = $data['time'];
		$this->date = $data['date'];
		$this->elaboration = $data['elaboration'];
	}

    public function getName(){
        return $this->name;
    }

    public function getTime(){
        return $this->time;
    }

    public function getDate(){
        return $this->date;
    }

    public function getElaboration(){
        return $this->elaboration;
    }
    public function getIngredients(){
        return $this->Ingredients;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setTime($time){
        $this->time = $time;
    }

    public function setDate($date){
        $this->date = $date;
    }
    public function setElaboration($elaboation){
        $this->elaboration = $elaboation;
    }
    public function addIngredient($ingredients){
        $this->Ingredients[] = $ingredients;
    }

    public function setUser($user){
        $this->user = $user;
    }
    public function __toString()
	{
		return $this->name;
	}

}