<?php

function chargerClass($class)
{
  require $class . '.class.php';
}

spl_autoload_register('chargerClass');

$array = array(
  'ID' => 16,
  'name' => 'Vyk12',
  'power' => 20,
  'damage' => 9,
  'level' => 4,
  'experience' => 30
);

$vyk = new Character($array);

echo $vyk->name();


// $ted = new Person('let ', $power = Person::STRONG_POWER, $experience = Person::STRONG_EXPERIENCE);
// echo $ted->getName();

// print_r($ted->getStatus());

// echo $ted::talk();  // the person will talk

// // $name = readline('Enter your age please :');

// echo $ted::beRude() . ' - ';


// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//   // Récupère les données du formulaire
//   $nom = $_POST["nom"];
//   $pseudo = $_POST["pseudo"];
//   $telephone = $_POST["telephone"];

//   // Valide les données du formulaire
//   if (empty($nom)) {
//     echo "Le nom est obligatoire.";
//   } elseif (empty($pseudo)) {
//     echo "Le pseudo est obligatoire.";
//   } elseif (empty($telephone)) {
//     echo "Le numéro de téléphone est obligatoire.";
//   } else {

//     // Enregistre les données du formulaire
//     // ...

//     // Affiche un message de succès
//     echo "Merci pour vos informations.";
//   }
// }


// // Request to database

// $request =  $db->query('SELECT ID, name, power, damage, level, experience FROM characters');

// while ($datas = $request->fecth(PDO::FETCH_ASSOC)) {
//   $perso = new Character($datas);

//   echo $perso->name(), ' a ', $perso->power(), ' de force, ',  $perso->damage(), ' de dégat.';
// }
