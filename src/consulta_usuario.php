<?php
//var_dump(__DIR__);
require_once __DIR__ . "\\bootstrap.php";
require_once __DIR__ . "\\entities\\User.php";
require_once __DIR__ . "\\entities\\Ingredient.php";
require_once __DIR__ . "\\entities\\Recipe.php";

$userRepository = $entityManager->getRepository(User::class);
$user = $userRepository->findOneBy(['name' => "Lucas"]);

echo json_encode($user) . PHP_EOL;


/*
$recipes = $user->getRecipes();


foreach ($recipes as $recipe) {
	echo $recipe . PHP_EOL;
}
*/