<?php
//var_dump(__DIR__);
require_once __DIR__ . "\\bootstrap.php";
require_once __DIR__ . "\\entities\\User.php";
require_once __DIR__ . "\\entities\\Ingredient.php";
require_once __DIR__ . "\\entities\\Recipe.php";

$userInfo = [
    "name"		=> "Lucas",
    "email"		=> "lucasavila@gmail.com",
    "password"	=> "1234"
];

$newUser = new User($userInfo);

$recipeInfo = [
    "name"  => "Pizza",
    "time"  => 60,
    "date" => new DateTime(),
    "elaboration" => "amasar, hornear"
];

$newRecipe = new Recipe($recipeInfo);
$newRecipe->setUser($newUser);
$newUser->addRecipe($newRecipe);
$entityManager->persist($newRecipe);

$ingredient1 = new Ingredient("harina", 500, "gr");
$ingredient1->setRecipe($newRecipe);
$ingredient2 = new Ingredient("tomate", 500, "gr");
$ingredient2->setRecipe($newRecipe);
$ingredient3 = new Ingredient("queso", 500, "gr" );
$ingredient3->setRecipe($newRecipe);

$entityManager->persist($ingredient1);
$entityManager->persist($ingredient2);
$entityManager->persist($ingredient3);
/*
$recipe->addIngredient($ingredient1);
$recipe->addIngredient($ingredient2);
$recipe->addIngredient($ingredient3);
*/
$entityManager->persist($newUser);

$entityManager->flush();