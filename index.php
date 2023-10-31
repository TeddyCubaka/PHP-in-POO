<?php

function chargerClass($class)
{
  require $class . '.class.php';
}

spl_autoload_register('chargerClass');


$ted = new Person('kfkf', $power = Person::STRONG_POWER, $experience = Person::STRONG_EXPERIENCE);
echo $ted->getName();

print_r($ted->getStatus());

echo $ted::talk();

// $name = readline('Enter your age please :');

echo $ted::beRude() . ' - ';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Récupère les données du formulaire
  $nom = $_POST["nom"];
  $pseudo = $_POST["pseudo"];
  $telephone = $_POST["telephone"];

  // Valide les données du formulaire
  if (empty($nom)) {
    echo "Le nom est obligatoire.";
  } elseif (empty($pseudo)) {
    echo "Le pseudo est obligatoire.";
  } elseif (empty($telephone)) {
    echo "Le numéro de téléphone est obligatoire.";
  } else {

    // Enregistre les données du formulaire
    // ...

    // Affiche un message de succès
    echo "Merci pour vos informations.";
  }
}


