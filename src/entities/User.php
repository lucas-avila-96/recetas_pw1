<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collection\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User implements JsonSerializable
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
	 * @ORM\Column(type="string")
	 * @var string
	 */
	private $email;

	/**
	 * @ORM\Column(type="string")
	 * @var string
	 */
	private $password;

	/**
	 * @ORM\OneToMany(targetEntity="Recipe", mappedBy="user", cascade={"all"})
	 * @var Recipe[]
	 */
	private $recipes;

	public function __construct(
		$data = [
			"name"		=> '',
			"email"		=> '',
			"password"	=> ''
		]
	) {
		$this->name = $data['name'];
		$this->email = $data['email'];
		$this->password = $data['password'];
	}


	public function getId()
	{
		return $this->id;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function addRecipe($recipe)
	{
		$this->recipes[] = $recipe;
	}

	public function getRecipes()
	{
		return $this->recipes;
	}

	public function __toString()
	{
		return $this->name;
	}

	public function jsonSerialize()
	{
		return [
			'name' => $this->name,
			'email' => $this->email,
		];
	}
}
